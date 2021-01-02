<x-layouts.app>

    <x-layouts.page.header
        mt="mt-6"
    ></x-layouts.page.header>

    <x-layouts.page.main>
        <div>
            <div class="form-container">
                <div class="form-heading">
                    Reset Password
                </div>
                @if(session('status'))
                    <span class="text-green-700 bg-green-50 py-2 px-3 rounded mb-4">
                        {{ session('status') }}
                    </span>
                @endif
                <x-forms.form
                    action="{{ route('password.request') }}"
                >
                    <x-forms.input
                        label="Email"
                        id="email"
                        type="email"
                        name="email"
                    ></x-forms.input>

                    <x-forms.form-footer>
                        <x-forms.button
                            buttontext="Submit Request"
                        ></x-forms.button>

                        <x-forms.cancel-button></x-forms.cancel-button>
                    </x-forms.form-footer>

                    <div class="mt-4">
                        <a
                            href="register"
                            class="text-blue-500 hover:text-blue-700 hover:underline"
                        >
                            Dont have an account?
                        </a>
                    </div>

                </x-forms.form>
            </div>
        </div>
    </x-layouts.page.main>
</x-layouts.app>
