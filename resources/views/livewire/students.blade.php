<div>
    <h2>Student Componets </h2>
        <li> Now we see How to Nested Components</li>
    <h2>Student List  Components </h2>
    @foreach ($students as $student)

    <livewire:student-lists/>
    {{-- <livewire:student-lists :name="$student"/> --}}

    {{-- type: 2 for call nested componetes
    @livewire('student-lists', ['name' =>$student]); --}}

    @endforeach


    <livewire:student-lists/>
</div>
