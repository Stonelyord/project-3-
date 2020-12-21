<?php
class Question {
    private $id, $owneremail, $ownerid, $createdate, $title, $body, $skills, $score;

    public function __construct($id, $owneremail, $ownerid, $createdate, $title, $body, $skills, $score){
        $this->id = $id;
        $this->owneremail = $owneremail;
        $this->ownerid = $ownerid;
        $this->createdate = $createdate;
        $this->title = $title;
        $this->body = $body;
        $this->skills = $skills;
        $this->score = $score;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOwneremail()
    {
        return $this->owneremail;
    }

    /**
     * @param mixed $owneremail
     */
    public function setOwneremail($owneremail)
    {
        $this->owneremail = $owneremail;
    }

    /**
     * @return mixed
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }

    /**
     * @param mixed $ownerid
     */
    public function setOwnerid($ownerid)
    {
        $this->ownerid = $ownerid;
    }

    /**
     * @return mixed
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * @param mixed $createdate
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

}