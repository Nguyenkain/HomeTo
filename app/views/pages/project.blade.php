@extends('layouts.default_admin')

{{-- Content --}}
@section('content')

    <div class="col-lg-12">
        {{Form::model($project, array('class' => 'form-horizontal me', 'files' => true))}}
        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>{{Lang::get('title.add_project')}}</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                <div class="form-group {{$errors->has('name') ? "has-error" : false}}">
                    {{Form::label('name', Lang::get('title.name').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('name', null, array('class' => 'form-control'))}}
                        {{ $errors->first('name', "<span for='name' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('address') ? "has-error" : false}}">
                    {{Form::label('address', Lang::get('title.address').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('address', null, array('class' => 'form-control'))}}
                        {{ $errors->first('address', "<span for='address' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
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

                <div class="form-group {{$errors->has('management_company') ? "has-error" : false}}">
                    {{Form::label('management_company', Lang::get('title.management_company').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('management_company', $management_company ,null, array('class' => 'form-control'))}}
                        <div class="row" style="margin-top: 10px">
                            <label class="control-label col-sm-4" style="text-align: left" for="management_company_new">Hoặc
                                tạo mới</label>

                            <div class="col-sm-8">
                                {{Form::text('management_company_new', null, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        {{ $errors->first('management_company', "<span for='management_company' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('management_fee') ? "has-error" : false}}">
                    {{Form::label('management_fee', Lang::get('title.management_fee').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('management_fee', null, array('class' => 'form-control'))}}
                        {{ $errors->first('management_fee', "<span for='management_fee' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('oto_fee') ? "has-error" : false}}">
                    {{Form::label('oto_fee', Lang::get('title.oto_fee').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('oto_fee', null, array('class' => 'form-control'))}}
                        {{ $errors->first('oto_fee', "<span for='oto_fee' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('cable_tv') ? "has-error" : false}}">
                    {{Form::label('cable_tv', Lang::get('title.cable_tv').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('cable_tv', null, array('class' => 'form-control'))}}
                        {{ $errors->first('cable_tv', "<span for='cable_tv' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('internet') ? "has-error" : false}}">
                    {{Form::label('internet', Lang::get('title.internet').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('internet', null, array('class' => 'form-control'))}}
                        {{ $errors->first('internet', "<span for='internet' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('gas') ? "has-error" : false}}">
                    {{Form::label('gas', Lang::get('title.gas').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('gas', null, array('class' => 'form-control'))}}
                        {{ $errors->first('gas', "<span for='gas' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('image_project') ? "has-error" : false}}">
                    {{Form::label('gas', Lang::get('title.image_project').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        <div class="col-sm-10">

                            <div id="dropzone_sight" class="dropzone dropzone-2" data-type="-2" data-maxfile="5">
                            </div>

                            <div class="dropzone_container">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group {{$errors->has('image_design') ? "has-error" : false}}">
                    {{Form::label('gas', Lang::get('title.image_design').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        <div class="col-sm-10">

                            <div id="dropzone_design" class="dropzone dropzone-1" data-type="-1" data-maxfile="1">
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

        @if($utilities && count($utilities) > 0)
            <div class="portlet portlet-default">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h4>{{Lang::get('title.utilities')}}</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body">
                    @foreach($utilities as $utility)
                        <div class="form-group {{$errors->has("image_utilities{$utility->ID}") ? "has-error" : false}}">
                            {{Form::label('image_utilities' . $utility->ID, $utility->name.' *', array('class' => 'col-sm-2 control-label'));}}
                            <div class="col-sm-10">
                                <div class="col-sm-10">

                                    <div id="dropzone_{{$utility->ID}}" class="dropzone dropzone{{$utility->ID}}"
                                         data-type="{{$utility->ID}}" data-maxfile="5">
                                    </div>

                                    <div class="dropzone_container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- /.portlet-body -->
            </div>
        @endif

        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>{{Lang::get('title.project_ơwner')}}</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">

                <div class="form-group {{$errors->has('investor') ? "has-error" : false}}">
                    {{Form::label('investor', Lang::get('title.investor').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('investor', $investor ,null, array('class' => 'form-control'))}}
                        <div class="row" style="margin-top: 10px">
                            <label class="control-label col-sm-4" style="text-align: left" for="investor_new">Hoặc
                                tạo mới</label>

                            <div class="col-sm-8">
                                {{Form::text('investor_new', null, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        {{ $errors->first('investor', "<span for='investor' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('design_company') ? "has-error" : false}}">
                    {{Form::label('design_company', Lang::get('title.design_company').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::select('design_company', $design_company ,null, array('class' => 'form-control'))}}
                        <div class="row" style="margin-top: 10px">
                            <label class="control-label col-sm-4" style="text-align: left" for="design_company">Hoặc
                                tạo mới</label>

                            <div class="col-sm-8">
                                {{Form::text('design_company_new', null, array('class' => 'form-control'))}}
                            </div>
                        </div>
                        {{ $errors->first('design_company', "<span for='design_company' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('number_floors') ? "has-error" : false}}">
                    {{Form::label('number_floors', Lang::get('title.number_floors').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('number_floors', null, array('class' => 'form-control'))}}
                        {{ $errors->first('number_floors', "<span for='number_floors' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('apartment_types') ? "has-error" : false}}">
                    {{Form::label('apartment_types', Lang::get('title.apartment_types').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('apartment_types', null, array('class' => 'form-control'))}}
                        {{ $errors->first('apartment_types', "<apartment_types for='name' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('total_area') ? "has-error" : false}}">
                    {{Form::label('total_area', Lang::get('title.total_area').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('total_area', null, array('class' => 'form-control'))}}
                        {{ $errors->first('total_area', "<span for='total_area' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                    </div>
                </div>

                <div class="form-group {{$errors->has('transfer_year') ? "has-error" : false}}">
                    {{Form::label('transfer_year', Lang::get('title.transfer_year').' *', array('class' => 'col-sm-2 control-label'));}}
                    <div class="col-sm-10">
                        {{Form::text('transfer_year', null, array('class' => 'form-control'))}}
                        {{ $errors->first('transfer_year', "<span for='transfer_year' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
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
            formData.append('id', '{{$project->id}}');
            formData.append('type', $(ele.element).data('type'));
        }

        function removedFile(file, ele) {
            if (!file.name) {
                return;
            } // The file hasn't been uploaded
            var isNew = file.processing ? true : false;
            var name = file.name;
            var type = $(ele.element).data('type');
            $.post("{{URL::to("project/deleteImage")}}?fileId=" + encodeURI(name) + "&id={{$project->id}}&_token={{ csrf_token() }}" + "&type=" + type); // Send the file id along
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
                    url: "{{URL::to("project/upload")}}",
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
                $.post("{{URL::to("project/updateCaption")}}?fileId=" + encodeURI(filename) + "&id={{$project->id}}&_token={{ csrf_token() }}" + "&type=" + type + "&caption=" + encodeURI(caption)); // Send the file id along
            });
        });
    </script>
@stop
