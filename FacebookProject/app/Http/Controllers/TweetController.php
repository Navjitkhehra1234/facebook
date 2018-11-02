<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;

class User {}
class Status {}


class TweetController extends Controller
{
    public function index()
    {

      $myName = $this->getMyName();
      $user1 = $this->getUser1();
      $user2 = $this->getUser2();
      $user3 = $this->getUser3();

      $statuses = $this->getStatus($myName);

      $viewData = [
        'user' => $myName,
        'youMayKnow' => [
          $user1,
          $user2,
          $user3,
        ],
        'statuses' => $statuses,
      ];

    return view('welcome', $viewData);
    }

     public function getMyName()
     {
       $myName = new User();

       $myName->name = 'Navjit Khehra';
       $myName->college = 'Studied at GNDU';
       $myName->live = 'Lives in Calgary, Alberta';
       $myName->from = 'From Batala';
       $myName->joined = 'June 2010';

       $myName->image = 'https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/40929045_107887336835111_4776915154061230080_n.jpg?_nc_cat=102&_nc_ht=scontent-yyz1-1.xx&oh=912da4632e59aaccd3534b156488aa3f&oe=5C7F4AC8';

       return $myName;
     }
    public function getUser1()
    {
      $user1 = new User();
      $user1->image = 'https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-1/c32.32.399.399/s100x100/46834_414668781954664_5980570_n.jpg?_nc_cat=1&_nc_ht=scontent-sea1-1.xx&oh=ff67aa461be4f73c900bca7feb6f9e16&oe=5C40F28B';
      $user1->name = 'Satwinder Singh';
      $user1->common = '5 mutual friend';

      return $user1;
    }

    public function getUser2()
    {
      $user2 = new User();
      $user2->image = 'https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-1/p100x100/40790105_1791346214278450_3870455009090994176_n.jpg?_nc_cat=111&_nc_ht=scontent-sea1-1.xx&oh=5cbb47763d52205b52ab2d27539ade6f&oe=5C82F6B7';
      $user2->name = 'Jatinder Gill';
      $user2->common = '14 mutual friend';

      return $user2;
    }

    public function getUser3()
    {
      $user3 = new User();
      $user3->image = 'https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-1/p100x100/39945294_10155549523771356_4755453099403902976_n.jpg?_nc_cat=1&_nc_ht=scontent-sea1-1.xx&oh=57c36b7c315af1580e0413eb9a2f7819&oe=5C4C22C2';
      $user3->name = 'David';
      $user3->common = '6 mutual friend';

      return $user3;
    }


    public function getStatus($myName)
    {
      $faker = Factory::create();

      $status1 = new Status();
      $status1->user = $myName;
      $status1->date = '28 October at 15:26';
      $status1->content = $faker->paragraph;

      $status2 = new Status();
      $status2->user = $myName;
      $status2->date = '12 October at 01:55';
      $status2->content = $faker->paragraph;

      $status3 = new Status();
      $status3->user = $myName;
      $status3->date = '15 October at 04:23';
      $status3->content = $faker->paragraph;

      $status4 = new Status();
      $status4->user = $myName;
      $status4->date = '19 October at 21:26';
      $status4->content = $faker->paragraph;

      return [$status1, $status2, $status3, $status4];
    }
}
