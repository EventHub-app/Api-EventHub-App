<?php 
namespace App\UseCases;

use App\Repositories\ListUserRepository;

class ListUsersUsecasese {
    public  ListUserRepository $listUserRepository;

    public function __construct(ListUserRepository $repo)
    {
         $this->listUserRepository = $repo;
    }

      public function execute(){
          $usersData = $this->listUserRepository->listUsers();
           return $usersData;
      }
}