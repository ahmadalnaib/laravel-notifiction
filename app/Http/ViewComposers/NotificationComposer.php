<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Notification;

class NotificationComposer {
    
  public function compose(View $view) {
      return $view->with('notifications', Notification::all());
  }
  
}