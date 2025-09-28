<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <ul>
        @foreach($jobs as $job)
        <li class="text-blue-300 hover:underline">
            <a href="/job/{{$job['id']}}"> {{ $job['title'] }} </a>
        </li>
        @endforeach
    </ul>
</x-layout>
