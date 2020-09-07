

    {foreach $data as $val}
        <p>{$val.title}</p>
        {foreach $val as $key=> $v}
            <p>{$v.title}</p>
        {/foreach}
    {/foreach}

   	{include file="public/head"}

    {foreach $introduce as $introducev}
        <p>{$introduce.title}</p>
    {/foreach}
    
    /images/page1_img1.jpg
    /images/page1_img2.jpg
    /images/page1_img3.jpg
    /images/page1_img4.jpg
    /images/page1_img5.jpg
    /images/page1_img6.jpg
    
    
    {foreach $data.anmals as $val}
    <div class="grid_4">
        <a href="__STATIC__{$val.path}" class="gal_item">
            <img src="__STATIC__{$val.path}" alt="">
            <div class="gal_caption">
                <time datetime="2014-01-01">15Jan 2014</time>
            </div>
            <span class="gal_magnify"></span>
        </a>
    </div>
    {/foreach}
    
     <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{:__('Path')}:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-path" data-rule="required" class="form-control" size="50" name="row[path]" type="text" value="">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-path" class="btn btn-danger plupload" data-input-id="c-path" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="true" data-preview-id="p-images"><i class="fa fa-upload"></i> {:__('Upload')}</button></span>
                    <span><button type="button" id="fachoose-path" class="btn btn-primary fachoose" data-input-id="c-path" data-mimetype="image/*" data-multiple="true"><i class="fa fa-list"></i> {:__('Choose')}</button></span>
                </div>
                <span class="msg-box n-right" for="c-path"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-path"></ul>
        </div>
    </div>
    
   {field: 'path', title: __('Path'), formatter: Table.api.formatter.images},
    
    