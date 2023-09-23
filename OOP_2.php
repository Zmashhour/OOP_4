<?php
class Account
{
    private string $id;
    private string $name;
    private int $balance = 0;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function __construct1(string $id, string $name, int $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function cridit(int $amount): int
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function debit(int $amount): int
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Amount exceeded balance \n";
        }
        return $this->balance;
    }

    public function transferTo(Account $another, int $amount): int
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            $another->balance += $amount;
        } else {
            echo "Amount exceeded balance \n";
        }
        return $this->balance;
    }
}

class Ball{
    private float $x;
    private float $y;
    private int $radius;
    private float $xDelta;
    private float $yDelta;

    public function __construct(float $x,float $y,int $radius,float $xDelta,float $yDelta)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
        $this->xDelta = $xDelta;
        $this->yDelta = $yDelta;
    }

    public function getX() : float {
        return $this->x;
    }

    public function setX($x) : void {
        $this->x = $x;
    }

    public function getY() : float {
        return $this->y;
    }

    public function setY($y) : void {
        $this->y = $y;
    }

    public function getRadius() : int {
        return $this->radius;
    }

    public function setRadius($radius) : void {
        $this->radius = $radius;
    }

    public function getXDelta() : float {
        return $this->xDelta;
    }

    public function setXDelta($xDelta) : void {
        $this->xDelta = $xDelta;
    }

    public function getYDelta() : float {
        return $this->yDelta;
    }

    public function setYDelta($yDelta) : void {
        $this->yDelta = $yDelta;
    }

    public function move() : void {
        $this->x += $this->xDelta;
        $this->y += $this->yDelta;
    }

    public function reflectHorizontal() : void {
        $this->xDelta = -$this->xDelta;
    }

    public function reflectVertical() : void {
        $this->yDelta = -$this->yDelta;
    }

}

class Date{
    private int $day;
    private int $mounth;
    private int $year;

    public function __construct(int $day, int $mounth, int $year)
    {
        $this->day = $day;
        $this->mounth = $mounth;
        $this->year = $year;
    }

    public function getDay() : int {
        return $this->day;
    }

    public function getMounth() : int {
        return $this->mounth;
    }

    public function getYear() : int {
        return $this->year;
    }

    public function setDay($day) : void {
        $this->day = $day;
    }

    public function setMounth($mounth) : void {
        $this->mounth = $mounth;
    }

    public function setYear($year) : void {
        $this->year = $year;
    }

    public function setDate(int $day, int $mounth, int $year) : void {
        $this->day = $day;
        $this->mounth = $mounth;
        $this->year = $year;
    }
    
    public function toString() : string {
        return "$this->day'/'$this->mounth'/'$this->year";
    }
}

class Time{
    private int $hour;
    private int $minute;
    private int $second;

    public function __construct(int $hour, int $minute, int $second)
    {
        
    }

    public function getHour() : int {
        return $this->hour;
    }

    public function getMinute() : int {
        return $this->minute;
    }

    public function getSecond() : int {
        return $this->second;
    }

    public function setHour($hour) : void {
        $this->hour = $hour;
    }

    public function setMinute($minute) : void {
        $this->minute = $minute;
    }

    public function setSecond($second) : void {
        $this->second = $second;
    }

    public function setTime(int $hour, int $minute, int $second) : void {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function nextSecond() : Time {
        $this->second+=1;
        if ($this->second == 60) {
            $this->second = 0;
            $this->nextMinute();
        }
        return $this;
    }

    private function nextMinute(): void
    {
        $this->minute += 1;

        if ($this->minute == 60) {
            $this->minute = 0;
            $this->nextHour();
        }
    }

    private function nextHour(): void
    {
        $this->hour += 1;

        if ($this->hour == 24) {
            $this->hour = 0;
        }
    }

    public function previosSecond() : Time {
        $this->second-=1;
        return $this;
    }
}