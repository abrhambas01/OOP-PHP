<?php require('partials/head.php'); ?>
<!--  style="background-color: #07171a; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 48 48'%3E%3Cg fill='%23d5dfe1' fill-opacity='0.04'%3E%3Cpath fill-rule='evenodd' d='M5 3.59L1.46.05.05 1.46 3.59 5 .05 8.54l1.41 1.41L5 6.41l3.54 3.54 1.41-1.41L6.41 5l3.54-3.54L8.54.05 5 3.59zM17 2h24v2H17V2zm0 4h24v2H17V6zM2 17h2v24H2V17zm4 0h2v24H6V17z'/%3E%3C/g%3E%3C/svg%3E");"
 -->
	<section id="main-background" class="h-screen bg-bodycolor">
	<div class="text-center">
		<div id="login-form" class="inline-block absolute font-sans text-center w-1/3 mt-10">
			<h3 class="text-3xl font-black mt-24 text-center text-inputcolor font-sans">Renegades</h3>
			<h3 class="text-2xl mb-8 font-normal text-center text-inputcolor">Create a free account</h3>
			<div class="flex w-full">
				<div id="registerAccount" class="border-2 border-switchcolor text-white p-4 w-1/2 mr-4 mb-4 text-xl font-bold rounded-none"><a id="registerOption" href="#/register">Create an Account</a></div>
				<div id="loginAccount" class="bg-bodycolor text-white p-4 w-1/2 mb-4 text-xl font-bold rounded-none"><a href="#/login" id="loginOption">Login</a></div>
			</div>
			
			<form id="registerForm" action="/register" method="POST">
				<div class="input-group mb-4">
					<input placeholder="Name" name="full_name" type="text" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
				</div>
				
				<div class="input-group">
					<input placeholder="Email" name="email" type="email" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
				</div>	
				
				<div class="input-group mt-4">
					<input type="password" name="password" placeholder="Password" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
				</div>	
				
				<div class="input-group mt-4">
					<button type="submit" class="hover:text-green text-white font-normal bg-buttoncolor text-xl p-4 w-full">
						Submit
					</button>
				</div>
			</form>

			<form id="loginForm" action="/register" method="POST">
				<div class="input-group">
					<input placeholder="Email" name="email" type="email" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
				</div>	
				
				<div class="input-group mt-4">
					<input type="password" name="password" placeholder="Password" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
				</div>	
				
				<div class="input-group mt-4">
					<button type="submit" class="hover:text-green text-white font-normal bg-buttoncolor text-xl p-4 w-full">
						Submit
					</button>
				</div>
			</form>
		</div>
		
		<div id="app-info" class="absolute w-1/3 ml-12">
			<p class="text-white font-serif mt-64 text-2xl">It was in year 1403, When the good King Nigel III of Notterham was assasinated by a suspected spy, it sparked a massive war all over medieval Europe and people have grown used to with the violence that people don't even trust their government anymore, the whole Europe was now run over by tyrants. Survival of the fittest was the only choice. And people are now joining to become a member of a renegade warriors to fight for what is right. Pick a renegade clan to fight for. Take charge of your character, play as a knight, a mercenary, or an ordinary country boy and play to whole lot of unique missions generated for you everyday and follow the path of being a renegade warrior.
			</p>
		</div>
	</div>
</section>

</div>

<?php require('partials/footer.php'); ?>
