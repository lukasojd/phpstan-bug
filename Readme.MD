# Reproduction bug

## Install

```
composer install
composer phpstan
```

## Test

```
./vendor/bin/phpstan
Note: Using configuration file .../phpstan-bug/phpstan.neon.
 5/5 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 
  Line   Entity/Project.php                                                                                                                                                              
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 
  14     Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
  14     Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
  14     Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
  14     Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
  19     Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
  19     Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
  24     Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
  24     Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 

 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 
  Line   Repository/ProjectRepository.php                                                                                                                                                
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 
         Reflection error: Could not locate constant Lukas\PhpstanBug\Enum\Status::ACTIVE while trying to evaluate constant expression in class Lukas\PhpstanBug\Entity\Project in file  
         /src/Entity/Project.php (line 22)                                                                                                                 
 ------ -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- 

```