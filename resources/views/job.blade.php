<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <ul>
        <li class="text-white">
            Job:{{$job['title']}}
        </li>
        <li class="text-white">
            Salary:{{$job['salary']}}
        </li>
    </ul>
</x-layout>
