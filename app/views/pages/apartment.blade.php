@extends('layouts.default_admin')

{{-- Content --}}
@section('content')

    <div class="col-lg-12">
        {{Form::model($apartment, array('class' => 'form-horizontal me', 'files' => true))}}
        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>{{Lang::get('title.add_post')}}</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                <div class="form-group {{$errors->has('title') ? "has-error" : false}}">
                    {{Form::label('title', Lang::get('title.title').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('title', null, array('class' => 'form-control'))}}
                        {{ $errors->first('title', "<span for='title' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('province') || $errors->has('district') ? "has-error" : false}}">
                    {{Form::label('province', Lang::get('title.province').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-5">
                        {{Form::select('province', $province ,null, array('class' => 'form-control'))}}
                        {{ $errors->first('province', "<span for='province' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                    <div class="col-sm-5">
                        {{Form::select('district', $district ,null, array('class' => 'form-control'))}}
                        {{ $errors->first('district', "<span for='district' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('project') ? "has-error" : false}}">
                    {{Form::label('project', Lang::get('title.project').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('project', $projects ,null, array('class' => 'form-control'))}}
                        {{ $errors->first('project', "<span for='project' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('price_square') ? "has-error" : false}}">
                    {{Form::label('price_square', Lang::get('title.price_square').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('price_square', null, array('class' => 'form-control'))}}
                        {{ $errors->first('price_square', "<span for='price_square' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('area') ? "has-error" : false}}">
                    {{Form::label('area', Lang::get('title.area').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('area', null, array('class' => 'form-control'))}}
                        {{ $errors->first('area', "<span for='area' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('price_total') ? "has-error" : false}}">
                    {{Form::label('price_total', Lang::get('title.price_total').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('price_total', null, array('class' => 'form-control'))}}
                        {{ $errors->first('price_total', "<span for='price_total' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('image_apartment') ? "has-error" : false}}">
                    {{Form::label('image_apartment', Lang::get('title.image_apartment').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        <div class="col-sm-10">

                            <div id="dropzone_image_apartment" class="dropzone dropzone-2" data-type="-2"
                                 data-maxfile="5">
                            </div>

                            <div class="dropzone_container">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group {{$errors->has('image_design_apartment') ? "has-error" : false}}">
                    {{Form::label('image_design_apartment', Lang::get('title.image_design_apartment').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        <div class="col-sm-10">

                            <div id="dropzone_image_design_apartment" class="dropzone dropzone-1" data-type="-1"
                                 data-maxfile="1">
                            </div>

                            <div class="dropzone_container">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.portlet-body -->
        </div>
        <!-- /.portlet -->

        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>{{Lang::get('title.apartment_info')}}</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                <div class="form-group {{$errors->has('furniture') ? "has-error" : false}}">
                    {{Form::label('furniture', Lang::get('title.furniture').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('furniture', $furnitures ,null, array('class' => 'form-control'))}}
                        {{ $errors->first('furniture', "<span for='furniture' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
                <div class="form-group {{$errors->has('direction_door') ? "has-error" : false}}">
                    {{Form::label('direction_door', Lang::get('title.direction_door').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('direction_door', $directions ,null, array('class' => 'form-control'))}}
                        {{ $errors->first('direction_door', "<span for='direction_door' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
                <div class="form-group {{$errors->has('direction_balcony') ? "has-error" : false}}">
                    {{Form::label('direction_balcony', Lang::get('title.direction_balcony').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('direction_balcony', $directions ,null, array('class' => 'form-control'))}}
                        {{ $errors->first('direction_balcony', "<span for='direction_balcony' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
                <div class="form-group {{$errors->has('direction_side_balcony') ? "has-error" : false}}">
                    {{Form::label('direction_side_balcony', Lang::get('title.direction_side_balcony').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('direction_side_balcony', $directions ,null, array('class' => 'form-control'))}}
                        {{ $errors->first('direction_side_balcony', "<span for='direction_side_balcony' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
                <div class="form-group {{$errors->has('floor_material') ? "has-error" : false}}">
                    {{Form::label('floor_material', Lang::get('title.floor_material').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('floor_material', $floor_materials ,null, array('class' => 'form-control'))}}
                        {{ $errors->first('floor_material', "<span for='floor_material' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
                <div class="form-group {{$errors->has('bedroom') ? "has-error" : false}}">
                    {{Form::label('bedroom', Lang::get('title.bedroom').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('bedroom', null, array('class' => 'form-control'))}}
                        {{ $errors->first('bedroom', "<span for='bedroom' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
                <div class="form-group {{$errors->has('floor_number') ? "has-error" : false}}">
                    {{Form::label('floor_number', Lang::get('title.floor_number').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('floor_number', null, array('class' => 'form-control'))}}
                        {{ $errors->first('floor_number', "<span for='floor_number' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
                <div class="form-group {{$errors->has('block') ? "has-error" : false}}">
                    {{Form::label('block', Lang::get('title.block').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('block', null, array('class' => 'form-control'))}}
                        {{ $errors->first('block', "<span for='block' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
                <div class="form-group {{$errors->has('transfer_year') ? "has-error" : false}}">
                    {{Form::label('transfer_year', Lang::get('title.transfer_year').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('transfer_year', null, array('class' => 'form-control'))}}
                        {{ $errors->first('transfer_year', "<span for='transfer_year' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>
            </div>
            <!-- /.portlet-body -->
        </div>

        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>{{Lang::get('title.contact_info')}}</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">

                <div class="form-group {{$errors->has('username') ? "has-error" : false}}">
                    {{Form::label('username', Lang::get('title.username').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('username', null, array('class' => 'form-control', 'readonly' => true))}}
                        {{ $errors->first('username', "<span for='username' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('email') ? "has-error" : false}}">
                    {{Form::label('email', Lang::get('title.email').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('email', null, array('class' => 'form-control'))}}
                        {{ $errors->first('email', "<span for='email' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('phone') ? "has-error" : false}}">
                    {{Form::label('phone', Lang::get('title.phone').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('phone', null, array('class' => 'form-control'))}}
                        {{ $errors->first('phone', "<span for='phone' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-success" type="submit" value="{{Lang::get('title.submit')}}">
                        <a href="#" class="btn btn-danger">{{Lang::get('title.cancel')}}</a>
                    </div>
                </div>

            </div>
            <!-- /.portlet-body -->
        </div>
        <!-- /.portlet -->

        {{Form::close()}}


    </div>
    <!-- /.col-lg-12 -->
@stop

@section('scripts')
    <script>

        function addedFile(file, ele) {
            var count = $(ele.element).find(".dropzone_container input:last-child").data("count");
            if (count >= 4) {
                ele.removeFile(file);
            }
        }

        function sending(file, xhr, formData, ele) {
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('id', '{{$apartment->id}}');
            formData.append('type', $(ele.element).data('type'));
        }

        function removedFile(file, ele) {
            if (!file.name) {
                return;
            } // The file hasn't been uploaded
            var isNew = file.processing ? true : false;
            var name = file.name;
            var type = $(ele.element).data('type');
            $.post("{{URL::to("apartment/deleteImage")}}?fileId=" + encodeURI(name) + "&id={{$apartment->id}}&_token={{ csrf_token() }}" + "&type=" + type); // Send the file id along
        }

        function success(file, responsenew, ele) {
            //Add to container
            var count = $(ele.element).find(".dropzone_container input:last-child").data("count");
            count = count ? count : 0;
            count = count + 1;

            //Add caption box
            caption = file.caption == undefined ? "" : file.caption;
            file._captionLabel = Dropzone.createElement("<p>Caption:</p>")
            file._captionBox = Dropzone.createElement("<textarea class='caption' id='" + responsenew + "' type='text' class='dropzone_caption'>" + caption + "</textarea>")
            file.previewElement.appendChild(file._captionLabel);
            file.previewElement.appendChild(file._captionBox);

            //Get type
            var type = $(ele.element).data('type');
            $(ele.element).find('.dropzone_container').append("<input type='hidden' value='" + responsenew + "' data-count='" + count + "'>");
        }

        $(document).ready(function () {
            var vars = {};
            $('.dropzone').each(function (e) {
                var dz = $(this);
                vars['myDropzone' + e] = new Dropzone('div.dropzone' + $(dz).data('type'), {
                    url: "{{URL::to("apartment/upload")}}",
                    addRemoveLinks: true,
                    dictRemoveFile: "{{Lang::get("button.remove")}}",
                    dictCancelUpload: "{{Lang::get("button.cancel")}}",
                    maxFiles: $(dz).data('maxfile') ? $(dz).data('maxfile') : 5,
                    dictMaxFilesExceeded: "{{Lang::get("title.file_exceeded")}}",
                    init: function () {
                        thisDropzone = this;

                        this.on("addedfile", function (file) {
                            addedFile(file, this);
                        });
                    }
                });

                vars['myDropzone' + e].on("sending", function (file, xhr, formData) {
                    sending(file, xhr, formData, this);
                });

                vars['myDropzone' + e].on("removedfile", function (file) {
                    removedFile(file, this);
                });

                vars['myDropzone' + e].on('success', function (file, responsenew) {
                    success(file, responsenew, this);
                });
            });

            $(".dropzone").on('blur', 'textarea.caption', function () {
                var filename = $(this).attr('id');
                var caption = $(this).val();
                var type = $(this).closest('.dropzone').data('type');
                $.post("{{URL::to("apartment/updateCaption")}}?fileId=" + encodeURI(filename) + "&id={{$apartment->id}}&_token={{ csrf_token() }}" + "&type=" + type + "&caption=" + encodeURI(caption)); // Send the file id along
            });
        });
    </script>
@stop
