<x-layout>
    <x-forms.page-heading>Register</x-forms.page-heading>

    <x-forms.form method="POST" action="/register">
        <x-forms.input name="name" label="Name" />
        <x-forms.input name="email" label="Email" type="email" />
        <x-forms.input name="password" label="Password" type="password" />
        <x-forms.input name="password_confirmation" label="Confirm Password" type="password" />

        <x-forms.divider />

        <x-forms.input name="Employer Name" label="Employer" />
        <x-forms.input name="Employer Logo" label="Logo" type="file" />

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
