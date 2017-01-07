{!! Form::model($todoList, ['route' => 'todolists.create']) !!}

    <div class="form-group">
        <label for="" class="control-label">List Name</label>
        {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Description</label>
        {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 2]) !!}
    </div>

{!! Form::close() !!}
