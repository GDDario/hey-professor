<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-container>
        <x-form post :action="route('question.store')">
            <x-text-area label="Question" name="question"/>

            <x-button.primary type="submit">Save</x-button.primary>

            <x-button.reset type="reset">Cancel</x-button.reset>
        </x-form>
    </x-container>
</x-app-layout>
