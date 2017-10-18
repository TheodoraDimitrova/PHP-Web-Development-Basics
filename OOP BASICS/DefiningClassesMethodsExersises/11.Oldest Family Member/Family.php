<?php


namespace OldestFamilyMember;


class Family

{

    private $members = [];
    private $oldestMember=null;

    public function AddMembers(Person $member)
    {
       $this->members[] = $member;
        if ($this->oldestMember == null ||
            $member->getAge() > $this->oldestMember->getAge())
        {
            $this->oldestMember = $member;
        }
    }


    // and a method returning the oldest family member (Person getOldestMember())
    public function getOldestMember(): Person
    {
        return $this->oldestMember;
    }
}