<?php

   namespace App\Policies;

   use App\Models\Notice;
   use App\Models\User;
   use Illuminate\Auth\Access\Response;

   class NoticePolicy
   {
       public function update(User $user, Notice $notice): bool
       {
           return $user->id === $notice->user_id;
       }

       public function delete(User $user, Notice $notice): bool
       {
           return $user->id === $notice->user_id;
       }
   }
