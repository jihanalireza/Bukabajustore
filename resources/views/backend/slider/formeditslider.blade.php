{{Form::open(['route'=>['sliderUpdate','id'=>$dataslider->id],'method'=>'put','enctype'=>'multipart/form-data'])}}
<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Image slider</h4>
                <div class="m-b-30 form-group">
                    <div class="fallback">
                        <input name="image" type="file" class="inputImageslider form-control">
                    </div>
                </div>
                <div id="cropimageslider" class="col-md-12"></div>
                <div class="input-field col-md-3"><input type="hidden" name="imageslider" value="" data-error=".err6"></div>
                <div class="col-md-12 accepted"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6 @if($errors->has('deskripsi')) has-primary @endif">
        <div class="col-sm-12">
            {{Form::label('deskripsi')}}
            <div>
                <textarea required class="form-control" rows="5" placeholder="Enter deskripsi" name="deskripsi" id="deskripsi">{{ $dataslider->deskripsi }}</textarea>
            </div>
            @if($errors->has('deskripsi')) <div class="form-control-feedback">{{ $errors->first('deskripsi') }}</div> @endif
        </div>
    </div>
    <div class="form-group col-md-6 @if($errors->has('status')) has-primary @endif">
        <div class="col-sm-12">
            {{Form::label('status')}}
            <select name="status" id="status_slider" class="form-control">
                <option value="">----Select-----</option>
                <option value="Active" @if($dataslider->status == "Active") selected="" @endif>Active</option>
                <option value="NonActive" @if($dataslider->status == "NonActive") selected="" @endif>NonActive</option>
            </select>
            @if($errors->has('status')) <div class="form-control-feedback">{{ $errors->first('status') }}</div> @endif
        </div>
    </div>

</div>  
{{Form::button('Save',['type'=>'submit','class'=>'btn btn-success waves-effect waves-light pull-right'])}}
{{Form::close()}}