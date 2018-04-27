<?php

echo shell_exec("cd .. && php artisan migrate:refresh && php artisan migrate"); 