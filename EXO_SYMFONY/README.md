# MovieDB

## Installation

Pour installer le projet MovieDB sur votre système.  
Après un `git clone` :

- `composer install`
- Créer le fichier `.env.local` avec la variable DATABASE_URL dedans. Veillez à choisir un nom de base de données
- `bin/console doctrine:database:create`
- `bin/console doctrine:migrations:migrate` (il ne faut surtout pas créer de migration mais bien appliquer la ou les migratiosn existantes)
- Pour avoir des fausses données : `bin/console doctrine:fixtures:load`

## MCD

https://www.mocodo.net/

```mocodo
WORK BY, 1N PERSON, 11 CREW_MEMBER
CREW_MEMBER: id, createdAt, updatedAt
WORKED AS, 1N JOB, 11 CREW_MEMBER
JOB: id, name, createdAt, updatedAt
:

PERSON: id, name, createdAt, updatedAt
DIRECTED BY, 11 DIRECTOR, 0N PERSON
WORKED IN, 1N MOVIE, 11 CREW_MEMBER
IS PART OF, 11 JOB, 0N DEPARTMENT
DEPARTMENT: id, name, createdAt, updatedAt

PLAYED AS, 11 CASTING, 0N PERSON
DIRECTOR: id, createdAt, updatedAt
DIRECTED, 11 DIRECTOR, 0N MOVIE
MOVIE: id, title, createdAt, updatedAt
:

:
CASTING: id, role, creditOrder
PLAYED IN, 11 CASTING, 0N MOVIE
OF KIND, 1N MOVIE, 1N GENRE
GENRE: id, name, createdAt, updatedAt
```
