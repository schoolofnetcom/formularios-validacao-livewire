<div>
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="https://sonassets.s3.amazonaws.com/img/logo-top.png" alt="Workflow" />
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
            Registro de Usuário
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form wire:submit.prevent="register">
                    <x-my-input label="Nome" model="name" placeholder="Digite seu nome..." />

                    <div class="mt-6">
                        <x-my-input label="Email" model="email"  placeholder="Digite seu email..."/>
                    </div>

                    <div class="mt-6">
                        <x-my-input label="Senha" model="password"  placeholder="Digite sua senha..."/>
                    </div>

                    <div class="mt-6">
                        <x-my-input label="Confirmação de senha" model="password_confirmation" placeholder="Confirme sua senha..." />
                    </div>

                    <div class="mt-6">
                        <x-my-button text="Registrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
