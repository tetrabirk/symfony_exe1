exercice_1
==========

A Symfony project created on June 3, 2017, 3:29 pm.


petit descriptif de la situation:
---------------------------------

*je n'ai pas encore fini mon exercice
*là j'ai mis le fichier news.yml en commentaire (src/Birk/NewsBundle/Ressources/fixtures/orm/news.yml)
*il y a seulement News et Auteur qui on été modifié pour être "lié" 
*quand je fait la commande ci dessous , mes tables "auteur","categorie" et "image" sont correctement alimentée
    $ php bin/console hautelook:fixtures:load

problème
--------

quand je "dé-commente" mon fichier news.yml sauf la dernière ligne
    #        auteur: '@auteur*'

la console me retourne cette erreur ci

```
  [Doctrine\ORM\ORMInvalidArgumentException]
  Expected value of type "Birk\NewsBundle\Entity\Auteur" for association field "Birk\NewsBundle\Entity\News#$auteur", got "Doctrine\Common\Collections\ArrayCollection" instead.
```

jusque là rien d'anormale, MAIS lorsque je décomente la dernière ligne aussi je recois ce message d'erreur ci 

```
[Fidry\AliceDataFixtures\Exception\MaxPassReachedException]
  Loading files limit of 15 reached. Could not load the following files:
  D:\projet perso\website\symfony_exe1\src\Birk\NewsBundle\Resources\fixtures\orm\n
  ews.yml:
   - Nelmio\Alice\Throwable\Exception\Generator\Resolver\UnresolvableValueException
  : Could not find a fixture or object ID matching the pattern "/^auteur.*/". in D:
  \projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Throwable\Exception\Ge
  nerator\Resolver\UnresolvableValueExceptionFactory.php:103
  Stack trace:
  #0 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\Resolve
  r\Value\Chainable\FixtureWildcardReferenceResolver.php(87): Nelmio\Alice\Throwabl
  e\Exception\Generator\Resolver\UnresolvableValueExceptionFactory::createForNoFixt
  ureOrObjectMatchingThePattern(Object(Nelmio\Alice\Definition\Value\FixtureMatchRe
  ferenceValue))
  #1 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\Resolve
  r\Value\ValueResolverRegistry.php(84): Nelmio\Alice\Generator\Resolver\Value\Chai
  nable\FixtureWildcardReferenceResolver->resolve(Object(Nelmio\Alice\Definition\Va
  lue\FixtureMatchReferenceValue), Object(Nelmio\Alice\Definition\Fixture\Templatin
  gFixture), Object(Nelmio\Alice\Generator\ResolvedFixtureSet), Array, Object(Nelmi
  o\Alice\Generator\GenerationContext))
  #2 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\Hydrato
  r\SimpleHydrator.php(80): Nelmio\Alice\Generator\Resolver\Value\ValueResolverRegi
  stry->resolve(Object(Nelmio\Alice\Definition\Value\FixtureMatchReferenceValue), O
  bject(Nelmio\Alice\Definition\Fixture\TemplatingFixture), Object(Nelmio\Alice\Gen
  erator\ResolvedFixtureSet), Array, Object(Nelmio\Alice\Generator\GenerationContex
  t))
  #3 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\ObjectG
  enerator\SimpleObjectGenerator.php(103): Nelmio\Alice\Generator\Hydrator\SimpleHy
  drator->hydrate(Object(Nelmio\Alice\Definition\Object\SimpleObject), Object(Nelmi
  o\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Alice\Generator\GenerationCo
  ntext))
  #4 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\ObjectG
  enerator\SimpleObjectGenerator.php(91): Nelmio\Alice\Generator\ObjectGenerator\Si
  mpleObjectGenerator->completeObject(Object(Nelmio\Alice\Definition\Fixture\Templa
  tingFixture), Object(Nelmio\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Al
  ice\Generator\GenerationContext))
  #5 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\ObjectG
  enerator\CompleteObjectGenerator.php(53): Nelmio\Alice\Generator\ObjectGenerator\
  SimpleObjectGenerator->generate(Object(Nelmio\Alice\Definition\Fixture\Templating
  Fixture), Object(Nelmio\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Alice\
  Generator\GenerationContext))
  #6 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\DoubleP
  assGenerator.php(60): Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenera
  tor->generate(Object(Nelmio\Alice\Definition\Fixture\TemplatingFixture), Object(N
  elmio\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Alice\Generator\Generati
  onContext))
  #7 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\DoubleP
  assGenerator.php(51): Nelmio\Alice\Generator\DoublePassGenerator->generateFixture
  s(Object(Nelmio\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Alice\Generato
  r\GenerationContext))
  #8 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Loader\SimpleData
  Loader.php(49): Nelmio\Alice\Generator\DoublePassGenerator->generate(Object(Nelmi
  o\Alice\FixtureSet))
  #9 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Loader\SimpleFile
  Loader.php(49): Nelmio\Alice\Loader\SimpleDataLoader->loadData(Array, Array, Arra
  y)
  #10 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src
  \Loader\MultiPassLoader.php(99): Nelmio\Alice\Loader\SimpleFileLoader->loadFile('
  D:\\projet perso...', Array, Array)
  #11 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src
  \Loader\MultiPassLoader.php(80): Fidry\AliceDataFixtures\Loader\MultiPassLoader->
  tryToLoadFiles(Object(Fidry\AliceDataFixtures\Loader\FileTracker), Object(Fidry\A
  liceDataFixtures\Loader\ErrorTracker), Object(Nelmio\Alice\ObjectSet))
  #12 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src
  \Loader\PersisterLoader.php(76): Fidry\AliceDataFixtures\Loader\MultiPassLoader->
  load(Array, Array, Array)
  #13 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src
  \Loader\PurgerLoader.php(67): Fidry\AliceDataFixtures\Loader\PersisterLoader->loa
  d(Array, Array, Array)
  #14 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src
  \Loader\FileResolverLoader.php(56): Fidry\AliceDataFixtures\Loader\PurgerLoader->
  load(Array, Array, Array)
  #15 D:\projet perso\website\symfony_exe1\vendor\hautelook\alice-bundle\src\Loader
  \DoctrineOrmLoader.php(172): Fidry\AliceDataFixtures\Loader\FileResolverLoader->l
  oad(Array, Array)
  #16 D:\projet perso\website\symfony_exe1\vendor\hautelook\alice-bundle\src\Loader
  \DoctrineOrmLoader.php(102): Hautelook\AliceBundle\Loader\DoctrineOrmLoader->load
  Fixtures(Object(Fidry\AliceDataFixtures\Loader\FileResolverLoader), Object(AppKer
  nel), Object(Doctrine\ORM\EntityManager), Array, Array, false, false)
  #17 D:\projet perso\website\symfony_exe1\vendor\hautelook\alice-bundle\src\Consol
  e\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand.php(139): Hautelook\AliceBu
  ndle\Loader\DoctrineOrmLoader->load(Object(Symfony\Bundle\FrameworkBundle\Console
  \Application), Object(Doctrine\ORM\EntityManager), Array, 'dev', false, false, NU
  LL)
  #18 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Compo
  nent\Console\Command\Command.php(264): Hautelook\AliceBundle\Console\Command\Doct
  rine\DoctrineOrmLoadDataFixturesCommand->execute(Object(Symfony\Component\Console
  \Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
  #19 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Compo
  nent\Console\Application.php(887): Symfony\Component\Console\Command\Command->run
  (Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Cons
  ole\Output\ConsoleOutput))
  #20 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Compo
  nent\Console\Application.php(223): Symfony\Component\Console\Application->doRunCo
  mmand(Object(Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFi
  xturesCommand), Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony
  \Component\Console\Output\ConsoleOutput))
  #21 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Bundl
  e\FrameworkBundle\Console\Application.php(81): Symfony\Component\Console\Applicat
  ion->doRun(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Comp
  onent\Console\Output\ConsoleOutput))
  #22 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Compo
  nent\Console\Application.php(130): Symfony\Bundle\FrameworkBundle\Console\Applica
  tion->doRun(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Com
  ponent\Console\Output\ConsoleOutput))
  #23 D:\projet perso\website\symfony_exe1\bin\console(28): Symfony\Component\Conso
  le\Application->run(Object(Symfony\Component\Console\Input\ArgvInput))
  #24 {main}
  Next Nelmio\Alice\Throwable\Exception\Generator\Resolver\UnresolvableValueDuringG
  enerationException: Could not resolve value during the generation process. in D:\
  projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Throwable\Exception\Gen
  erator\Resolver\UnresolvableValueDuringGenerationExceptionFactory.php:25
  Stack trace:
  #0 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\Hydrato
  r\SimpleHydrator.php(82): Nelmio\Alice\Throwable\Exception\Generator\Resolver\Unr
  esolvableValueDuringGenerationExceptionFactory::createFromResolutionThrowable(Obj
  ect(Nelmio\Alice\Throwable\Exception\Generator\Resolver\UnresolvableValueExceptio
  n))
  #1 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\ObjectG
  enerator\SimpleObjectGenerator.php(103): Nelmio\Alice\Generator\Hydrator\SimpleHy
  drator->hydrate(Object(Nelmio\Alice\Definition\Object\SimpleObject), Object(Nelmi
  o\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Alice\Generator\GenerationCo
  ntext))
  #2 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\ObjectG
  enerator\SimpleObjectGenerator.php(91): Nelmio\Alice\Generator\ObjectGenerator\Si
  mpleObjectGenerator->completeObject(Object(Nelmio\Alice\Definition\Fixture\Templa
  tingFixture), Object(Nelmio\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Al
  ice\Generator\GenerationContext))
  #3 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\ObjectG
  enerator\CompleteObjectGenerator.php(53): Nelmio\Alice\Generator\ObjectGenerator\
  SimpleObjectGenerator->generate(Object(Nelmio\Alice\Definition\Fixture\Templating
  Fixture), Object(Nelmio\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Alice\
  Generator\GenerationContext))
  #4 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\DoubleP
  assGenerator.php(60): Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenera
  tor->generate(Object(Nelmio\Alice\Definition\Fixture\TemplatingFixture), Object(N
  elmio\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Alice\Generator\Generati
  onContext))
  #5 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Generator\DoubleP
  assGenerator.php(51): Nelmio\Alice\Generator\DoublePassGenerator->generateFixture
  s(Object(Nelmio\Alice\Generator\ResolvedFixtureSet), Object(Nelmio\Alice\Generato
  r\GenerationContext))
  #6 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Loader\SimpleData
  Loader.php(49): Nelmio\Alice\Generator\DoublePassGenerator->generate(Object(Nelmi
  o\Alice\FixtureSet))
  #7 D:\projet perso\website\symfony_exe1\vendor\nelmio\alice\src\Loader\SimpleFile
  Loader.php(49): Nelmio\Alice\Loader\SimpleDataLoader->loadData(Array, Array, Arra
  y)
  #8 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src\
  Loader\MultiPassLoader.php(99): Nelmio\Alice\Loader\SimpleFileLoader->loadFile('D
  :\\projet perso...', Array, Array)
  #9 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src\
  Loader\MultiPassLoader.php(80): Fidry\AliceDataFixtures\Loader\MultiPassLoader->t
  ryToLoadFiles(Object(Fidry\AliceDataFixtures\Loader\FileTracker), Object(Fidry\Al
  iceDataFixtures\Loader\ErrorTracker), Object(Nelmio\Alice\ObjectSet))
  #10 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src
  \Loader\PersisterLoader.php(76): Fidry\AliceDataFixtures\Loader\MultiPassLoader->
  load(Array, Array, Array)
  #11 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src
  \Loader\PurgerLoader.php(67): Fidry\AliceDataFixtures\Loader\PersisterLoader->loa
  d(Array, Array, Array)
  #12 D:\projet perso\website\symfony_exe1\vendor\theofidry\alice-data-fixtures\src
  \Loader\FileResolverLoader.php(56): Fidry\AliceDataFixtures\Loader\PurgerLoader->
  load(Array, Array, Array)
  #13 D:\projet perso\website\symfony_exe1\vendor\hautelook\alice-bundle\src\Loader
  \DoctrineOrmLoader.php(172): Fidry\AliceDataFixtures\Loader\FileResolverLoader->l
  oad(Array, Array)
  #14 D:\projet perso\website\symfony_exe1\vendor\hautelook\alice-bundle\src\Loader
  \DoctrineOrmLoader.php(102): Hautelook\AliceBundle\Loader\DoctrineOrmLoader->load
  Fixtures(Object(Fidry\AliceDataFixtures\Loader\FileResolverLoader), Object(AppKer
  nel), Object(Doctrine\ORM\EntityManager), Array, Array, false, false)
  #15 D:\projet perso\website\symfony_exe1\vendor\hautelook\alice-bundle\src\Consol
  e\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand.php(139): Hautelook\AliceBu
  ndle\Loader\DoctrineOrmLoader->load(Object(Symfony\Bundle\FrameworkBundle\Console
  \Application), Object(Doctrine\ORM\EntityManager), Array, 'dev', false, false, NU
  LL)
  #16 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Compo
  nent\Console\Command\Command.php(264): Hautelook\AliceBundle\Console\Command\Doct
  rine\DoctrineOrmLoadDataFixturesCommand->execute(Object(Symfony\Component\Console
  \Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))
  #17 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Compo
  nent\Console\Application.php(887): Symfony\Component\Console\Command\Command->run
  (Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Cons
  ole\Output\ConsoleOutput))
  #18 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Compo
  nent\Console\Application.php(223): Symfony\Component\Console\Application->doRunCo
  mmand(Object(Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFi
  xturesCommand), Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony
  \Component\Console\Output\ConsoleOutput))
  #19 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Bundl
  e\FrameworkBundle\Console\Application.php(81): Symfony\Component\Console\Applicat
  ion->doRun(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Comp
  onent\Console\Output\ConsoleOutput))
  #20 D:\projet perso\website\symfony_exe1\vendor\symfony\symfony\src\Symfony\Compo
  nent\Console\Application.php(130): Symfony\Bundle\FrameworkBundle\Console\Applica
  tion->doRun(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Com
  ponent\Console\Output\ConsoleOutput))
  #21 D:\projet perso\website\symfony_exe1\bin\console(28): Symfony\Component\Conso
  le\Application->run(Object(Symfony\Component\Console\Input\ArgvInput))
  #22 {main}


```

je supose que j'ai mal fait quelque chose dans mon fichier news.yml ou dans mes fichier Entity et que ça à avoir avec le "JOIN" entre les objets mais je ne trouve pas/comprend pas 
