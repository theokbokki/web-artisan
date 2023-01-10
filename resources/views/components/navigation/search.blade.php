<div class="hidden nav-2:block">
	<input type="checkbox" name="search-large" id="search-large" class="sr-only peer">
	<label for="search-large" class="flex gap-x-2 items-center input">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
			class="w-4 h-4 text-slate-400">
			<path stroke-linecap="round" stroke-linejoin="round"
				d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
		</svg>
		<span class="">Chercher...</span>
	</label>
	<div class="fixed top-0 left-0 h-[100vh] w-[100vw] p-4 invisible peer-checked:visible z-10">
		<label for="search-large" class="fixed inset-0 bg-slate-900 backdrop-blur-sm bg-opacity-20">
		</label>
		<div
			class="mx-auto w-full max-w-3xl flex flex-col min-h-0 rounded-lg bg-white p-4 gap-4 max-h-[75vh] overflow-scroll relative z-20">
			<form action="/search" class="grid gap-4">
				<label for="search" class="label">Recherche</label>
				<p class="">
					Cherchez un article, un professeur, un tag, ...
				</p>
				<div class="flex gap-x-2">
					<div class="relative w-full shrink">
						<div class="flex absolute items-center left-0 inset-y-0 pl-3">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="w-5 h-5 text-slate-400">
								<path stroke-linecap="round" stroke-linejoin="round"
									d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
							</svg>
						</div>
						<input type="search" id="search" name="search" class="input block w-full pl-10" placeholder="">
					</div>
					<button type="submit" class="button">
						<div class="">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="w-5 h-5 text-slate-50">
								<path stroke-linecap="round" stroke-linejoin="round"
									d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
							</svg>
						</div>
					</button>
				</div>
			</form>
		</div>
	</div>
