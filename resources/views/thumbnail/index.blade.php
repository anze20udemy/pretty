<div class="container">
    <div class="content">

        {!!Form::open(['route' => 'thumbnail.store', 'method' => 'POST', 'files' => 'true'])!!}
        {!! Form::label('image', 'Select Image') !!}
        {!! Form::file('image', null) !!}
        <button type="submit">Upload</button>
        {!! Form::close() !!}
    </div>
</div>