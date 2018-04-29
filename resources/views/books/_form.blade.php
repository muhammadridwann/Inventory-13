<div class="box-body">
    <div class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
        {!! Form::label('title', 'Barang') !!}

        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Nama barang']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group has-feedback{{ $errors->has('author_id') ? ' has-error' : '' }}">
        {!! Form::label('author_id', 'Kategori') !!}

        {!! Form::select('author_id', App\Author::pluck('name','id')->all(), null, ['class' => 'form-control js-select2']) !!}
        {!! $errors->first('author_id', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group has-feedback{{ $errors->has('amount') ? ' has-error' : '' }}">
        {!! Form::label('amount', 'Jumlah') !!}

        {!! Form::number('amount', null, ['class' => 'form-control', 'min' => 1, 'placeholder' => 'Jumlah barang']) !!}
        {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
        @if (isset($book))
            <p class="help-block">{{ $book->borrowed }} barang sedang dipinjam</p>
        @endif
    </div>

    <div class="form-group has-feedback{{ $errors->has('cover') ? ' has-error' : '' }}">
        {!! Form::label('cover', 'Foto barang') !!}

        {!! Form::file('cover') !!}
        @if (isset($book) && $book->cover)
            <p> {!! Html::image(asset('img/'.$book->cover), null, ['class' => 'img-rounded img-responsive']) !!} </p>
        @endif
        <p class="help-block">Size file (JPG/JPEG/PNG/GIF) maks 1MB</p>
        {!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
</div>
