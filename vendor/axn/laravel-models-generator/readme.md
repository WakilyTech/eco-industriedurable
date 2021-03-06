Laravel Models Generator
========================

Ce package permet de générer les modèles et relations Eloquent à partir de la base de données.

Depuis la version 5, les relations sont générées dans des traits séparés (voir config).

Installation
------------

Install the package with Composer:

```sh
composer require axn/laravel-models-generator
```

In Laravel 5.5 the service provider will automatically get registered.
In older versions of the framework just add the service provider
to the array of providers in `config/app.php`:

```php
'providers' => [
    // ...
    Axn\ModelsGenerator\ServiceProvider::class,
],
```

Publier si besoin la config et les templates (stubs) du package via les commandes :

```sh
// config
php artisan vendor:publish --tag=models-generator.config

// stubs
php artisan vendor:publish --tag=models-generator.stubs
```

La config est publiée dans `config/models-generator.php`
Les templates sont publiés dans `resources/stubs/vendor/models-generator/`

Modifier au besoin les options de config et les templates des modèles et relations.

Utilisation
-----------

Lancer simplement la commande :

```
php artisan models:generate
```

**Options :**

* **--table (ou -t) :** Permet de sélectionner les tables à générer. Pour renseigner
  plusieurs tables, faire : -t table1 -t table2 -t ...
* **--preview (ou -p) :** Si cette option est précisée, les messages des opérations
  effectuées seront affichés mais les fichiers ne seront pas touchés.

## Conventions de nommage

- **Modèle** = nom table singularisé (voir option de config "singular_rules" si
  la singularisation ne se fait pas correctement) en studly case.
- **Relations "has many", "morph many" et "belongs to many"** = nom table liée en
  camel case.
- **Relations "has one" et "morph one"** = nom modèle lié en camel case.
- **Relation "belongs to"** = nom foreign key (sans le "\_id" ou "id\_") en camel
  case.
- **Relation "morph to"** = nom morph défini dans l'option de config "polymorphic_relations".

**Autres détails :**

- **Relations "has many", "morph many" et "belongs to many" :** pour que les noms
  de ces relations soient au pluriel, il faut que les noms des tables le soit également
  (le générateur ne fait pas de pluralisation).
- **Relations "has many", "has one", "morph many", "morph one" :** si le nom de
  la foreign key n'est pas standard, une précision est ajoutée au nom de la relation
  sous la forme "Via{nomFK}".
- **Relation "belongs to many" :** si le nom de la table pivot n'est pas standard,
  une précision est ajoutée au nom de la relation sous la forme "Via{nomTablePivot}".
- Les tables **dont le nom contient le mot clé "_has_"** sont automatiquement reconnues
  comme étant des pivots donc pas besoin de les renseigner dans la config, sauf s'il y a
  besoin de renseigner explicitement les clés à utiliser.

Exemple :

```php
// Modèle table "comments"
class Comment extends Model
{
    // Relation "belongs to" vers la table "users" via fk "user_id"
    public function user() {}

    // Relation "belongs to" vers la table "users" via fk "updator_id"
    public function updator() {}
}

// Modèle table "users"
class User extends Model
{
    // Relation "has many" vers la table "comments" via fk "user_id"
    public function comments() {}

    // Relation "has many" vers la table "comments" via fk "updator_id"
    public function commentsViaUpdator() {}
}
```

Limitations
-----------

### Noms de relations en doublon

Il se peut que deux relations aient le même nom dans un même modèle, par exemple
s'il y a une relation polymorphique ET une relation "has one or many" vers une même
table.

Exemple :

```php
class Staff extends Model
{
    // Relation polymorphique vers la table "photos"
    // via champs "imageable_type" et "imageable_id"
    public function photos()
    {
        return $this->morhMany('Photo', 'imageable');
    }

    // Relation "has many" vers la table "photos" via fk "staff_id"
    public function photos()
    {
        return $this->hasMany('Photo', 'staff_id');
    }
}
```

Dans ce cas il faut soit retirer la relation "has many", via l'option de config
`ignored_relations`, soit retirer la relation polymorphique qui a été renseignée
dans l'option de config `polymorphic_relations`.
