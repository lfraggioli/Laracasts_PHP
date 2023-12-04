<?php

namespace Core;

use Core\Session;

Session::destroy();

header('location: /');
exit();
