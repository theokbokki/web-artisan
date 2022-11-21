<x-layouts.main>
  <section class="w-[90%] ml-[5vw] grid gap-x-6 gap-y-12 xl:grid-cols-teachers">
    <div class="space-y-6 max-w-[33rem] order-2 xl:order-1">
      <h2 class="title">l'interview de Kirk</h2>
      <div class="space-y-8">
        <div class="space-y-4">
          <p class="small-title">C’était comment tes années en tant qu’étudiant ? </p>
          <p>En deux mots, “super interessant”!</p>
          <p>Vraiment, j’ai appris énormément pendant que j’étais là bas. La formation
            est “challengante” et il faut s’accrocher mais avec un peu de passion ça
            se passe bien.</p>
          <p>L’ambiance est chouette aussi. On était 6 en classe l’année ou je suis sorti et c’etait vraiment un groupe
            génial!</p>
        </div>
        <div class="space-y-4">
          <p class="small-title">Si tu devais choisir un projet que tu as fait à l’école à présenter sur ton portfolio,
            ce serait lequel ?</p>
          <p>Justement, mon portfolio! Il à été réalisé il y a 5ans et je ne l’ai pas changé depuis.</p>
        </div>
        <div class="space-y-4">
          <p class="small-title">Un conseil pour les étudiants actuels?</p>
          <p>Organisez-vous! C’est super important, je me rappelle très bien la sensation d’arriver à deux semaines des
            examens et avoir à peine un wordpress qui fonctionne! </p>
          <p>Evitez-vous des nuits blanches, organisez votre temps!</p>
        </div>
      </div>
    </div>
    <aside class="order-1 xl:order-2 max-w-[33rem] flex flex-col gap-4">
      <div class="gap-4 grid">
        <img src="../../images/man.jpg" alt="" class="rounded-lg xl:max-w-[320px] order-1 xl:order-0">
        <h3 class="small-title order-0 xl:order-1">
          Kirk Vandael
        </h3>
        <div class="order-2 grid gap-2">
          <p class="text-sm">
            Developeur senior chez Epic</p>
          <p>Kirk à réalisé son stage de fin d’année chez Epic et à été engagé avant même d’avoir eu fini ces études.
          </p>
        </div>
      </div>
    </aside>
  </section>
  <section class="w-[90%] max-w-[33rem] ml-[5vw] space-y-8">
    <h2 class="title">
      Contacter Kirk
    </h2>

    <div class="flex flex-wrap gap-4">
      <button class="button w-max flex items-center gap-4">
        Twitter
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
          <path id="Path_685" data-name="Path 685"
            d="M19.961,4.152a8.438,8.438,0,0,1-2.354.636,4.079,4.079,0,0,0,1.8-2.233,8.552,8.552,0,0,1-2.606.971,4.148,4.148,0,0,0-4.928-.8A4.013,4.013,0,0,0,9.817,7.2,11.678,11.678,0,0,1,1.367,3a3.908,3.908,0,0,0-.555,2.03,4.02,4.02,0,0,0,1.823,3.36A4.137,4.137,0,0,1,.778,7.882v.049A4.054,4.054,0,0,0,4.067,11.89a4.228,4.228,0,0,1-1.843.07,4.106,4.106,0,0,0,3.837,2.8A8.307,8.307,0,0,1,.975,16.489,8.84,8.84,0,0,1,0,16.434a11.8,11.8,0,0,0,6.3,1.812A11.485,11.485,0,0,0,17.962,6.775c0-.172,0-.344-.012-.517A8.208,8.208,0,0,0,20,4.169Z"
            transform="translate(0 -2.246)" fill="#f8fafc" />
        </svg>
      </button>
      <button class="button w-max flex items-center gap-4">
        LinkedIn
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
          <path id="Path_684" data-name="Path 684"
            d="M17.04,17.04H14.077V12.4c0-1.107-.02-2.531-1.541-2.531-1.543,0-1.78,1.206-1.78,2.451V17.04H7.792V7.5h2.845V8.8h.04a3.118,3.118,0,0,1,2.807-1.542c3,0,3.557,1.976,3.557,4.546ZM4.449,6.192a1.72,1.72,0,1,1,1.216-.5,1.72,1.72,0,0,1-1.216.5M5.93,17.04H2.964V7.5H5.93ZM18.517,0H1.475A1.459,1.459,0,0,0,0,1.442V18.556A1.461,1.461,0,0,0,1.475,20H18.517A1.464,1.464,0,0,0,20,18.556V1.441A1.463,1.463,0,0,0,18.517,0"
            transform="translate(0.001 0.001)" fill="#f8fafc" />
        </svg>
      </button>
    </div>

  </section>
  <section class="w-[90%]  ml-[5vw] space-y-6">
    <h2 class="title">
      Les Projets qu'il a réalisé en tant qu'étudiant
    </h2>
    <ul class="space-y-6">
      <x-student-project />
    </ul>
  </section>
  <section class="w-[90%]  ml-[5vw] space-y-6">
    <h2 class="title">
      Viens lire l'interview des autres anciens
    </h2>
    <ul class="space-y-6">
      <x-alumni-card />
    </ul>
    <a class="button inline-block" href="">Voir tous les anciens</a>
  </section>
</x-layouts.main>
