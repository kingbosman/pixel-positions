<x-layout>
    <x-page-heading>Post a job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$40,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="California" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Full time">Full Time</option>
            <option value="Part time">Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https:://www.example.com/job/ceo" />
        <x-forms.checkbox label="Feature (costs extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="boss,tough,desperate" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
