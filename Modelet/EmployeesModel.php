<?php
namespace Models;
include_once 'BaseModel.php';
class EmployeesModel extends BaseModel{

    public function isUser($username,$password){
        $sql="SELECT * FROM $this->tableName WHERE username=? and password=?";
        $param=[$username,$password];
        $this->adapter->runQuery($sql,$param);
        if($this->adapter->count()==1){
            return true;
        }else{
            return false;
        }
    }

    public function getSuggestions($pattern,$department){
        $sql="SELECT name , job_title, start_date,salary,bonuses
              FROM employees NATURAL JOIN departments NATURAL JOIN jobs 
              WHERE department_name =? AND (name LIKE ? OR job_title LIKE ? OR start_date LIKE ? OR salary LIKE ? OR bonuses LIKE ?)";
        $pattern=$pattern."%";
        $param=[$department,$pattern,$pattern,$pattern,$pattern,$pattern];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }

    public function getByDepartment($deptName){
        $sql="SELECT name,surname, start_date FROM $this->tableName NATURAL JOIN departments WHERE department_name=?";
        $param=[$deptName];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }

    public function getByJob($deptName){
        $sql="SELECT name, job_title,start_date,salary,bonuses FROM $this->tableName NATURAL JOIN jobs NATURAL JOIN  departments WHERE department_name=?";
        $param=[$deptName];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }

    public function employeesCount($deptName){
        $this->getByDepartment($deptName);
        return $this->adapter->count();
    }

    public function findByUsername($username){
        $sql="SELECT {$this->getPrimaryKey()} from $this->tableName WHERE username=?";
        $param=[$username];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }
    public function getBonuses($username){
        $sql="SELECT bonuses FROM $this->tableName WHERE username=?";
        $param=[$username];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }

    public function getEmpSalary($username){
        $sql="SELECT salary FROM $this->tableName WHERE username=?";
        $param=[$username];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }
    public function getEmpApprovedReq($username){
        $sql="select request_title, request_date, approval_date
        from requests_made natural join employees natural join requests where username=? and approval='YES'";
        $param=[$username];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }
    public function getTaskCompletedEmp($username){
        $sql="select task_title, date_created, task_documentation
       from   tasks NATURAL JOIN employees WHERE username=?";
        $param=[$username];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();

    }
    public function getEmpColleagues($username){
        $sql="select * from  employees
        where department_id=(select department_id from employees where username=? AND not username=?";
        $param=[$username];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }

    public function getDepTasks($username){
        $sql="select distinct task_title, date_created, task_documentation  from tasks natural join employees
        where tasks.department_id=(select department_id from employees where username=?);";
        $param=[$username];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }
    public function getApprovedRequestsEmp($username){
        $sql="select request_title, request_date, approval_date from requests_made natural join employees natural join requests
        where username=? and approval='YES'";
        $param=[$username];
        $this->adapter->runQuery($sql,$param);
        return $this->adapter->results();
    }

}
?>