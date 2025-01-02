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

        <hr class="border-gray-700 border-dashed my-4">

        {{-- Listagem --}}

        <div class="dark:text-gray-500 uppercase font-bold mb-1">List of Questions</div>

        <div class="dark:text-gray-400 space-y-4">
            @foreach($questions as $item)
                <x-question :question="$item" />
            @endforeach
        </div>
    </x-container>
</x-app-layout>
