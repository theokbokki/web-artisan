<x-layouts.main>
  <section class="w-[90%] ml-[5vw] flex gap-x-8 gap-y-12">
    <div class="w-[70%] max-w-[60%] min-w-[60%]">
      <div class="space-y-4">
        <img src="../../images/frontend.png" alt="" class="base-shadow">
        <h2 class="title">Les changements dans Laravel 9</h2>
        <p class="text-sm">par<a href="link text-sm"> Alexandre Legentil </a>le 12 septembre 2022</p>
        <div class="flex gap-2">
          <a class="tag" href="">Laravel</a>
          <a class="tag" href="">PHP</a>
          <a class="tag" href="">Backend</a>
        </div>
      </div>
      <div class="space-y-6">
        <p class="small-title">
          PHP 8 la version minimale dans Laravel 9
        </p>
        <p>
          Puisque Laravel 9 nécessitera Symfony 6.0 et qu’il a une exigence minimale de PHP 8, cela signifie que Laravel
          9
          aura la même restriction.
        </p>
      </div>
      <div class="space-y-6">
        <p class="small-title">Nouveau design pour routes:list</p>
        <p>La commande routes:list est incluse dans Laravel depuis longtemps maintenant, et un problème qui se pose
          parfois est que si vous avez défini des routes énormes et complexes, il peut être difficile de les afficher
          dans
          la console. Grâce à une pull request de Nuno Maduro, cette commande est en train de faire peau neuve.</p>
      </div>
      <div class="space-y-6">
        <p class="small-title">Nouvelle option de test –coverage</p>
        <p>Une nouvelle option artisan test –coverage permet d’afficher la couverture de code du test directement sur le
          terminal. Il comprend également une option –min que vous pouvez utiliser pour indiquer l’application du seuil
          minimum pour la couverture.</p>
      </div>
      <div class="space-y-6">
        <p class="small-title">Migrations de stub anonymes</p>
        <p>Au début de l’année, la version 8.37 de Laravel a été dotée d’une nouvelle fonctionnalité appelée «
          Migrations
          anonymes », qui permet d’éviter les collisions entre les noms de classes de migration</p>
        <div class="input flex gap-4 p-10">
          <code>
            Au début de l’année, la version 8.37 de Laravel a été dotée d’une nouvelle fonctionnalité appelée «
            Migrations
            anonymes », qui permet d’éviter les collisions entre les noms de classes de migration
          </code>
          <div class="self-start text-slate-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
            </svg>
          </div>
        </div>
        <p>Au lancement de Laravel 9, ce sera la valeur par défaut lorsque vous exécuterez php artisan make:migration.
        </p>
      </div>
      <div class="space-y-4">
        <p class="small-title">Nouvelle interface de création de requêtes</p>
        <p>Grâce à Chris Morrell, Laravel 9 disposera d’une nouvelle interface de création de requêtes.</p>
        <div class="border-l-4 border-slate-300 pl-5 text-slate-400">
          <blockquote class="">Pour les développeurs qui s’appuient sur les
            indications de type pour l’analyse statique, le refactoring ou la complétion de code dans leur IDE,
            l’absence
            d’interface partagée ou d’héritage entre Query\Builder, Eloquent\Builder et Eloquent\Relation peut être
            assez
            délicate :</blockquote>
        </div>
        <div class="input flex gap-4 p-10">
          <code>Au lancement de LaravCette fonctionnalité ajoute une nouvelle interface
            Illuminate\Contracts\Database\QueryBuilder et un trait
            Illuminate\Database\Eloquent\Concerns\DecoratesQueryBuilder qui implémente l’interface à la place de
            l’implémentation __call existante.el 9, ce sera la valeur par défaut lorsque vous exécuterez php artisan
            make:migration.</code>
          <div class="self-start text-slate-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <aside class="">
      <h3 class="sr-only">
        More articles
      </h3>
      <div class="space-y-20">
        <div class="space-y-4">
          <p class="label">
            Vous aimerez aussi
          </p>
          <ul class="space-y-6">
            <x-article-card-small />
            <x-article-card-small />
            <x-article-card-small />
          </ul>
          <a class="button inline-block" href="">Voir tous les articles</a>
        </div>
        <div class="space-y-4">
          <p class="label">
            Par le même auteur
          </p>
          <ul class="space-y-6">
            <x-article-card-small />
          </ul>
          <a class="button inline-block" href="">Voir tous ses articles</a>
        </div>
        <div class="space-y-4">
          <p class="label">
            Des questions qu'il à posées
          </p>
          <ul class="space-y-6">
            <x-forum-card-small />
          </ul>
          <a class="button inline-block" href="">Voir toutes ses questions</a>
        </div>
      </div>
    </aside>
  </section>
</x-layouts.main>
