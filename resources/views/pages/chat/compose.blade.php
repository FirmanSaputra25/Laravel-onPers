@extends('templates.layouts')

@section('styles')
<link rel="stylesheet" href="{{ asset('customs/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('customs/adminlte/dist/css/adminlte.min.css') }}">
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Inbox</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Chat</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="mailbox.html" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Folders</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item active">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-inbox"></i> Inbox
                                    <span class="badge bg-primary float-right">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-envelope"></i> Sent
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-file-alt"></i> Drafts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-filter"></i> Junk
                                    <span class="badge bg-warning float-right">65</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-trash-alt"></i> Trash
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Labels</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="far fa-circle text-danger"></i> Important</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="far fa-circle text-warning"></i> Promotions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="far fa-circle text-primary"></i> Social</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Compose New Message</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <input class="form-control" placeholder="To:">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Subject:">
                        </div>
                        <div class="form-group">
                            <textarea id="compose-textarea" class="form-control" style="height: 300px; display: none;">                      &lt;h1&gt;&lt;u&gt;Heading Of Message&lt;/u&gt;&lt;/h1&gt;
                          &lt;h4&gt;Subheading&lt;/h4&gt;
                          &lt;p&gt;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                            was born and I will give you a complete account of the system, and expound the actual teachings
                            of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                            dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                            how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                            is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                            but because occasionally circumstances occur in which toil and pain can procure him some great
                            pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                            except to obtain some advantage from it? But who has any right to find fault with a man who
                            chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                            produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                            dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                            blinded by desire, that they cannot foresee&lt;/p&gt;
                          &lt;ul&gt;
                            &lt;li&gt;List item one&lt;/li&gt;
                            &lt;li&gt;List item two&lt;/li&gt;
                            &lt;li&gt;List item three&lt;/li&gt;
                            &lt;li&gt;List item four&lt;/li&gt;
                          &lt;/ul&gt;
                          &lt;p&gt;Thank you,&lt;/p&gt;
                          &lt;p&gt;John Doe&lt;/p&gt;
                        </textarea>
                            <div class="note-editor note-frame card">
                                <div class="note-dropzone">
                                    <div class="note-dropzone-message"></div>
                                </div>
                                <div class="note-toolbar card-header" role="toolbar">
                                    <div class="note-btn-group btn-group note-style">
                                        <div class="note-btn-group btn-group"><button type="button"
                                                class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1"
                                                data-toggle="dropdown" title="" aria-label="Style"
                                                data-original-title="Style"><i class="note-icon-magic"></i></button>
                                            <div class="note-dropdown-menu dropdown-menu dropdown-style" role="list"
                                                aria-label="Style"><a class="dropdown-item" href="#" data-value="p"
                                                    role="listitem" aria-label="p">
                                                    <p>Normal</p>
                                                </a><a class="dropdown-item" href="#" data-value="blockquote"
                                                    role="listitem" aria-label="blockquote">
                                                    <blockquote class="blockquote">Blockquote</blockquote>
                                                </a><a class="dropdown-item" href="#" data-value="pre" role="listitem"
                                                    aria-label="pre">
                                                    <pre
                                                        style="position: relative;">Code<div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>
                                                </a><a class="dropdown-item" href="#" data-value="h1" role="listitem"
                                                    aria-label="h1">
                                                    <h1>Header 1</h1>
                                                </a><a class="dropdown-item" href="#" data-value="h2" role="listitem"
                                                    aria-label="h2">
                                                    <h2>Header 2</h2>
                                                </a><a class="dropdown-item" href="#" data-value="h3" role="listitem"
                                                    aria-label="h3">
                                                    <h3>Header 3</h3>
                                                </a><a class="dropdown-item" href="#" data-value="h4" role="listitem"
                                                    aria-label="h4">
                                                    <h4>Header 4</h4>
                                                </a><a class="dropdown-item" href="#" data-value="h5" role="listitem"
                                                    aria-label="h5">
                                                    <h5>Header 5</h5>
                                                </a><a class="dropdown-item" href="#" data-value="h6" role="listitem"
                                                    aria-label="h6">
                                                    <h6>Header 6</h6>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="note-btn-group btn-group note-font"><button type="button"
                                            class="note-btn btn btn-light btn-sm note-btn-bold" tabindex="-1" title=""
                                            aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)"><i
                                                class="note-icon-bold"></i></button><button type="button"
                                            class="note-btn btn btn-light btn-sm note-btn-underline" tabindex="-1"
                                            title="" aria-label="Underline (CTRL+U)"
                                            data-original-title="Underline (CTRL+U)"><i
                                                class="note-icon-underline"></i></button><button type="button"
                                            class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                            aria-label="Remove Font Style (CTRL+\)"
                                            data-original-title="Remove Font Style (CTRL+\)"><i
                                                class="note-icon-eraser"></i></button></div>
                                    <div class="note-btn-group btn-group note-fontname">
                                        <div class="note-btn-group btn-group"><button type="button"
                                                class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1"
                                                data-toggle="dropdown" title="" aria-label="Font Family"
                                                data-original-title="Font Family"><span class="note-current-fontname"
                                                    style="font-family: &quot;Source Sans Pro&quot;;">Source Sans
                                                    Pro</span></button>
                                            <div class="note-dropdown-menu dropdown-menu note-check dropdown-fontname"
                                                role="list" aria-label="Font Family"><a class="dropdown-item" href="#"
                                                    data-value="Arial" role="listitem" aria-label="Arial"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Arial'">Arial</span></a><a
                                                    class="dropdown-item" href="#" data-value="Arial Black"
                                                    role="listitem" aria-label="Arial Black"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Arial Black'">Arial Black</span></a><a
                                                    class="dropdown-item" href="#" data-value="Comic Sans MS"
                                                    role="listitem" aria-label="Comic Sans MS"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Comic Sans MS'">Comic Sans MS</span></a><a
                                                    class="dropdown-item" href="#" data-value="Courier New"
                                                    role="listitem" aria-label="Courier New"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Courier New'">Courier New</span></a><a
                                                    class="dropdown-item" href="#" data-value="Helvetica"
                                                    role="listitem" aria-label="Helvetica"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Helvetica'">Helvetica</span></a><a
                                                    class="dropdown-item" href="#" data-value="Impact" role="listitem"
                                                    aria-label="Impact"><i class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Impact'">Impact</span></a><a
                                                    class="dropdown-item" href="#" data-value="Tahoma" role="listitem"
                                                    aria-label="Tahoma"><i class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Tahoma'">Tahoma</span></a><a
                                                    class="dropdown-item" href="#" data-value="Times New Roman"
                                                    role="listitem" aria-label="Times New Roman"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Times New Roman'">Times New
                                                        Roman</span></a><a class="dropdown-item" href="#"
                                                    data-value="Verdana" role="listitem" aria-label="Verdana"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Verdana'">Verdana</span></a><a
                                                    class="dropdown-item checked" href="#" data-value="Source Sans Pro"
                                                    role="listitem" aria-label="Source Sans Pro"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Source Sans Pro'">Source Sans
                                                        Pro</span></a><a class="dropdown-item" href="#"
                                                    data-value="Segoe UI" role="listitem" aria-label="Segoe UI"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Segoe UI'">Segoe UI</span></a><a
                                                    class="dropdown-item" href="#" data-value="Segoe UI Emoji"
                                                    role="listitem" aria-label="Segoe UI Emoji"><i
                                                        class="note-icon-menu-check"></i> <span
                                                        style="font-family: 'Segoe UI Emoji'">Segoe UI
                                                        Emoji</span></a><a class="dropdown-item" href="#"
                                                    data-value="Segoe UI Symbol" role="listitem"
                                                    aria-label="Segoe UI Symbol"><i class="note-icon-menu-check"></i>
                                                    <span style="font-family: 'Segoe UI Symbol'">Segoe UI
                                                        Symbol</span></a></div>
                                        </div>
                                    </div>
                                    <div class="note-btn-group btn-group note-color">
                                        <div class="note-btn-group btn-group note-color note-color-all"><button
                                                type="button"
                                                class="note-btn btn btn-light btn-sm note-current-color-button"
                                                tabindex="-1" title="" aria-label="Recent Color"
                                                data-original-title="Recent Color" data-backcolor="#FFFF00"
                                                data-forecolor="#000000"><i class="note-icon-font note-recent-color"
                                                    style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button
                                                type="button" class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color"
                                                data-original-title="More Color"></button>
                                            <div class="note-dropdown-menu dropdown-menu" role="list">
                                                <div class="note-palette">
                                                    <div class="note-palette-title">Background Color</div>
                                                    <div><button type="button"
                                                            class="note-color-reset btn btn-light btn-default"
                                                            data-event="backColor"
                                                            data-value="transparent">Transparent</button></div>
                                                    <div class="note-holder" data-event="backColor">
                                                        <!-- back colors -->
                                                        <div class="note-color-palette">
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#000000"
                                                                    data-event="backColor" data-value="#000000" title=""
                                                                    aria-label="Black" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Black"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#424242"
                                                                    data-event="backColor" data-value="#424242" title=""
                                                                    aria-label="Tundora" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Tundora"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#636363"
                                                                    data-event="backColor" data-value="#636363" title=""
                                                                    aria-label="Dove Gray" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Dove Gray"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C9C94"
                                                                    data-event="backColor" data-value="#9C9C94" title=""
                                                                    aria-label="Star Dust" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Star Dust"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEC6CE"
                                                                    data-event="backColor" data-value="#CEC6CE" title=""
                                                                    aria-label="Pale Slate" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Pale Slate"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFEFEF"
                                                                    data-event="backColor" data-value="#EFEFEF" title=""
                                                                    aria-label="Gallery" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Gallery"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7F7F7"
                                                                    data-event="backColor" data-value="#F7F7F7" title=""
                                                                    aria-label="Alabaster" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Alabaster"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="White" data-toggle="button"
                                                                    tabindex="-1" data-original-title="White"></button>
                                                            </div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#FF0000"
                                                                    data-event="backColor" data-value="#FF0000" title=""
                                                                    aria-label="Red" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Red"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF9C00"
                                                                    data-event="backColor" data-value="#FF9C00" title=""
                                                                    aria-label="Orange Peel" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Orange Peel"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFF00"
                                                                    data-event="backColor" data-value="#FFFF00" title=""
                                                                    aria-label="Yellow" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Yellow"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FF00"
                                                                    data-event="backColor" data-value="#00FF00" title=""
                                                                    aria-label="Green" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Green"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FFFF"
                                                                    data-event="backColor" data-value="#00FFFF" title=""
                                                                    aria-label="Cyan" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Cyan"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#0000FF"
                                                                    data-event="backColor" data-value="#0000FF" title=""
                                                                    aria-label="Blue" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C00FF"
                                                                    data-event="backColor" data-value="#9C00FF" title=""
                                                                    aria-label="Electric Violet" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Electric Violet"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF00FF"
                                                                    data-event="backColor" data-value="#FF00FF" title=""
                                                                    aria-label="Magenta" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Magenta"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#F7C6CE"
                                                                    data-event="backColor" data-value="#F7C6CE" title=""
                                                                    aria-label="Azalea" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Azalea"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE7CE"
                                                                    data-event="backColor" data-value="#FFE7CE" title=""
                                                                    aria-label="Karry" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Karry"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFEFC6"
                                                                    data-event="backColor" data-value="#FFEFC6" title=""
                                                                    aria-label="Egg White" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Egg White"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6EFD6"
                                                                    data-event="backColor" data-value="#D6EFD6" title=""
                                                                    aria-label="Zanah" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Zanah"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEDEE7"
                                                                    data-event="backColor" data-value="#CEDEE7" title=""
                                                                    aria-label="Botticelli" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Botticelli"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEE7F7"
                                                                    data-event="backColor" data-value="#CEE7F7" title=""
                                                                    aria-label="Tropical Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Tropical Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6D6E7"
                                                                    data-event="backColor" data-value="#D6D6E7" title=""
                                                                    aria-label="Mischka" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Mischka"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E7D6DE"
                                                                    data-event="backColor" data-value="#E7D6DE" title=""
                                                                    aria-label="Twilight" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Twilight"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E79C9C"
                                                                    data-event="backColor" data-value="#E79C9C" title=""
                                                                    aria-label="Tonys Pink" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Tonys Pink"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFC69C"
                                                                    data-event="backColor" data-value="#FFC69C" title=""
                                                                    aria-label="Peach Orange" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Peach Orange"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE79C"
                                                                    data-event="backColor" data-value="#FFE79C" title=""
                                                                    aria-label="Cream Brulee" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Cream Brulee"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5D6A5"
                                                                    data-event="backColor" data-value="#B5D6A5" title=""
                                                                    aria-label="Sprout" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Sprout"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A5C6CE"
                                                                    data-event="backColor" data-value="#A5C6CE" title=""
                                                                    aria-label="Casper" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Casper"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9CC6EF"
                                                                    data-event="backColor" data-value="#9CC6EF" title=""
                                                                    aria-label="Perano" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Perano"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5A5D6"
                                                                    data-event="backColor" data-value="#B5A5D6" title=""
                                                                    aria-label="Cold Purple" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Cold Purple"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6A5BD"
                                                                    data-event="backColor" data-value="#D6A5BD" title=""
                                                                    aria-label="Careys Pink" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Careys Pink"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E76363"
                                                                    data-event="backColor" data-value="#E76363" title=""
                                                                    aria-label="Mandy" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Mandy"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7AD6B"
                                                                    data-event="backColor" data-value="#F7AD6B" title=""
                                                                    aria-label="Rajah" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Rajah"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFD663"
                                                                    data-event="backColor" data-value="#FFD663" title=""
                                                                    aria-label="Dandelion" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Dandelion"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#94BD7B"
                                                                    data-event="backColor" data-value="#94BD7B" title=""
                                                                    aria-label="Olivine" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Olivine"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#73A5AD"
                                                                    data-event="backColor" data-value="#73A5AD" title=""
                                                                    aria-label="Gulf Stream" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Gulf Stream"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BADDE"
                                                                    data-event="backColor" data-value="#6BADDE" title=""
                                                                    aria-label="Viking" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Viking"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#8C7BC6"
                                                                    data-event="backColor" data-value="#8C7BC6" title=""
                                                                    aria-label="Blue Marguerite" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Blue Marguerite"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#C67BA5"
                                                                    data-event="backColor" data-value="#C67BA5" title=""
                                                                    aria-label="Puce" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Puce"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#CE0000"
                                                                    data-event="backColor" data-value="#CE0000" title=""
                                                                    aria-label="Guardsman Red" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Guardsman Red"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E79439"
                                                                    data-event="backColor" data-value="#E79439" title=""
                                                                    aria-label="Fire Bush" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Fire Bush"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFC631"
                                                                    data-event="backColor" data-value="#EFC631" title=""
                                                                    aria-label="Golden Dream" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Golden Dream"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BA54A"
                                                                    data-event="backColor" data-value="#6BA54A" title=""
                                                                    aria-label="Chelsea Cucumber" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Chelsea Cucumber"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A7B8C"
                                                                    data-event="backColor" data-value="#4A7B8C" title=""
                                                                    aria-label="Smalt Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Smalt Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#3984C6"
                                                                    data-event="backColor" data-value="#3984C6" title=""
                                                                    aria-label="Boston Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Boston Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#634AA5"
                                                                    data-event="backColor" data-value="#634AA5" title=""
                                                                    aria-label="Butterfly Bush" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Butterfly Bush"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A54A7B"
                                                                    data-event="backColor" data-value="#A54A7B" title=""
                                                                    aria-label="Cadillac" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Cadillac"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#9C0000"
                                                                    data-event="backColor" data-value="#9C0000" title=""
                                                                    aria-label="Sangria" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Sangria"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B56308"
                                                                    data-event="backColor" data-value="#B56308" title=""
                                                                    aria-label="Mai Tai" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Mai Tai"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#BD9400"
                                                                    data-event="backColor" data-value="#BD9400" title=""
                                                                    aria-label="Buddha Gold" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Buddha Gold"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#397B21"
                                                                    data-event="backColor" data-value="#397B21" title=""
                                                                    aria-label="Forest Green" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Forest Green"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#104A5A"
                                                                    data-event="backColor" data-value="#104A5A" title=""
                                                                    aria-label="Eden" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Eden"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#085294"
                                                                    data-event="backColor" data-value="#085294" title=""
                                                                    aria-label="Venice Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Venice Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#311873"
                                                                    data-event="backColor" data-value="#311873" title=""
                                                                    aria-label="Meteorite" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Meteorite"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#731842"
                                                                    data-event="backColor" data-value="#731842" title=""
                                                                    aria-label="Claret" data-toggle="button"
                                                                    tabindex="-1" data-original-title="Claret"></button>
                                                            </div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#630000"
                                                                    data-event="backColor" data-value="#630000" title=""
                                                                    aria-label="Rosewood" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Rosewood"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#7B3900"
                                                                    data-event="backColor" data-value="#7B3900" title=""
                                                                    aria-label="Cinnamon" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Cinnamon"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#846300"
                                                                    data-event="backColor" data-value="#846300" title=""
                                                                    aria-label="Olive" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Olive"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#295218"
                                                                    data-event="backColor" data-value="#295218" title=""
                                                                    aria-label="Parsley" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Parsley"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#083139"
                                                                    data-event="backColor" data-value="#083139" title=""
                                                                    aria-label="Tiber" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Tiber"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#003163"
                                                                    data-event="backColor" data-value="#003163" title=""
                                                                    aria-label="Midnight Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Midnight Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#21104A"
                                                                    data-event="backColor" data-value="#21104A" title=""
                                                                    aria-label="Valentino" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Valentino"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A1031"
                                                                    data-event="backColor" data-value="#4A1031" title=""
                                                                    aria-label="Loulou" data-toggle="button"
                                                                    tabindex="-1" data-original-title="Loulou"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><button type="button"
                                                            class="note-color-select btn btn-light btn-default"
                                                            data-event="openPalette"
                                                            data-value="backColorPicker-17271893007821">Select</button><input
                                                            type="color" id="backColorPicker-17271893007821"
                                                            class="note-btn note-color-select-btn" value="#FFFF00"
                                                            data-event="backColorPalette-17271893007821"></div>
                                                    <div class="note-holder-custom" id="backColorPalette-17271893007821"
                                                        data-event="backColor">
                                                        <div class="note-color-palette">
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="backColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-palette">
                                                    <div class="note-palette-title">Text Color</div>
                                                    <div><button type="button"
                                                            class="note-color-reset btn btn-light btn-default"
                                                            data-event="removeFormat" data-value="foreColor">Reset to
                                                            default</button></div>
                                                    <div class="note-holder" data-event="foreColor">
                                                        <!-- fore colors -->
                                                        <div class="note-color-palette">
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#000000"
                                                                    data-event="foreColor" data-value="#000000" title=""
                                                                    aria-label="Black" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Black"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#424242"
                                                                    data-event="foreColor" data-value="#424242" title=""
                                                                    aria-label="Tundora" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Tundora"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#636363"
                                                                    data-event="foreColor" data-value="#636363" title=""
                                                                    aria-label="Dove Gray" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Dove Gray"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C9C94"
                                                                    data-event="foreColor" data-value="#9C9C94" title=""
                                                                    aria-label="Star Dust" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Star Dust"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEC6CE"
                                                                    data-event="foreColor" data-value="#CEC6CE" title=""
                                                                    aria-label="Pale Slate" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Pale Slate"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFEFEF"
                                                                    data-event="foreColor" data-value="#EFEFEF" title=""
                                                                    aria-label="Gallery" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Gallery"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7F7F7"
                                                                    data-event="foreColor" data-value="#F7F7F7" title=""
                                                                    aria-label="Alabaster" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Alabaster"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="White" data-toggle="button"
                                                                    tabindex="-1" data-original-title="White"></button>
                                                            </div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#FF0000"
                                                                    data-event="foreColor" data-value="#FF0000" title=""
                                                                    aria-label="Red" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Red"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF9C00"
                                                                    data-event="foreColor" data-value="#FF9C00" title=""
                                                                    aria-label="Orange Peel" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Orange Peel"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFF00"
                                                                    data-event="foreColor" data-value="#FFFF00" title=""
                                                                    aria-label="Yellow" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Yellow"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FF00"
                                                                    data-event="foreColor" data-value="#00FF00" title=""
                                                                    aria-label="Green" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Green"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#00FFFF"
                                                                    data-event="foreColor" data-value="#00FFFF" title=""
                                                                    aria-label="Cyan" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Cyan"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#0000FF"
                                                                    data-event="foreColor" data-value="#0000FF" title=""
                                                                    aria-label="Blue" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9C00FF"
                                                                    data-event="foreColor" data-value="#9C00FF" title=""
                                                                    aria-label="Electric Violet" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Electric Violet"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FF00FF"
                                                                    data-event="foreColor" data-value="#FF00FF" title=""
                                                                    aria-label="Magenta" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Magenta"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#F7C6CE"
                                                                    data-event="foreColor" data-value="#F7C6CE" title=""
                                                                    aria-label="Azalea" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Azalea"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE7CE"
                                                                    data-event="foreColor" data-value="#FFE7CE" title=""
                                                                    aria-label="Karry" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Karry"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFEFC6"
                                                                    data-event="foreColor" data-value="#FFEFC6" title=""
                                                                    aria-label="Egg White" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Egg White"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6EFD6"
                                                                    data-event="foreColor" data-value="#D6EFD6" title=""
                                                                    aria-label="Zanah" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Zanah"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEDEE7"
                                                                    data-event="foreColor" data-value="#CEDEE7" title=""
                                                                    aria-label="Botticelli" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Botticelli"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#CEE7F7"
                                                                    data-event="foreColor" data-value="#CEE7F7" title=""
                                                                    aria-label="Tropical Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Tropical Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6D6E7"
                                                                    data-event="foreColor" data-value="#D6D6E7" title=""
                                                                    aria-label="Mischka" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Mischka"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E7D6DE"
                                                                    data-event="foreColor" data-value="#E7D6DE" title=""
                                                                    aria-label="Twilight" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Twilight"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E79C9C"
                                                                    data-event="foreColor" data-value="#E79C9C" title=""
                                                                    aria-label="Tonys Pink" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Tonys Pink"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFC69C"
                                                                    data-event="foreColor" data-value="#FFC69C" title=""
                                                                    aria-label="Peach Orange" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Peach Orange"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFE79C"
                                                                    data-event="foreColor" data-value="#FFE79C" title=""
                                                                    aria-label="Cream Brulee" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Cream Brulee"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5D6A5"
                                                                    data-event="foreColor" data-value="#B5D6A5" title=""
                                                                    aria-label="Sprout" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Sprout"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A5C6CE"
                                                                    data-event="foreColor" data-value="#A5C6CE" title=""
                                                                    aria-label="Casper" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Casper"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#9CC6EF"
                                                                    data-event="foreColor" data-value="#9CC6EF" title=""
                                                                    aria-label="Perano" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Perano"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B5A5D6"
                                                                    data-event="foreColor" data-value="#B5A5D6" title=""
                                                                    aria-label="Cold Purple" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Cold Purple"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#D6A5BD"
                                                                    data-event="foreColor" data-value="#D6A5BD" title=""
                                                                    aria-label="Careys Pink" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Careys Pink"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#E76363"
                                                                    data-event="foreColor" data-value="#E76363" title=""
                                                                    aria-label="Mandy" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Mandy"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#F7AD6B"
                                                                    data-event="foreColor" data-value="#F7AD6B" title=""
                                                                    aria-label="Rajah" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Rajah"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFD663"
                                                                    data-event="foreColor" data-value="#FFD663" title=""
                                                                    aria-label="Dandelion" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Dandelion"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#94BD7B"
                                                                    data-event="foreColor" data-value="#94BD7B" title=""
                                                                    aria-label="Olivine" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Olivine"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#73A5AD"
                                                                    data-event="foreColor" data-value="#73A5AD" title=""
                                                                    aria-label="Gulf Stream" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Gulf Stream"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BADDE"
                                                                    data-event="foreColor" data-value="#6BADDE" title=""
                                                                    aria-label="Viking" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Viking"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#8C7BC6"
                                                                    data-event="foreColor" data-value="#8C7BC6" title=""
                                                                    aria-label="Blue Marguerite" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Blue Marguerite"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#C67BA5"
                                                                    data-event="foreColor" data-value="#C67BA5" title=""
                                                                    aria-label="Puce" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Puce"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#CE0000"
                                                                    data-event="foreColor" data-value="#CE0000" title=""
                                                                    aria-label="Guardsman Red" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Guardsman Red"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#E79439"
                                                                    data-event="foreColor" data-value="#E79439" title=""
                                                                    aria-label="Fire Bush" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Fire Bush"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#EFC631"
                                                                    data-event="foreColor" data-value="#EFC631" title=""
                                                                    aria-label="Golden Dream" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Golden Dream"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#6BA54A"
                                                                    data-event="foreColor" data-value="#6BA54A" title=""
                                                                    aria-label="Chelsea Cucumber" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Chelsea Cucumber"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A7B8C"
                                                                    data-event="foreColor" data-value="#4A7B8C" title=""
                                                                    aria-label="Smalt Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Smalt Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#3984C6"
                                                                    data-event="foreColor" data-value="#3984C6" title=""
                                                                    aria-label="Boston Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Boston Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#634AA5"
                                                                    data-event="foreColor" data-value="#634AA5" title=""
                                                                    aria-label="Butterfly Bush" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Butterfly Bush"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#A54A7B"
                                                                    data-event="foreColor" data-value="#A54A7B" title=""
                                                                    aria-label="Cadillac" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Cadillac"></button></div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#9C0000"
                                                                    data-event="foreColor" data-value="#9C0000" title=""
                                                                    aria-label="Sangria" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Sangria"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#B56308"
                                                                    data-event="foreColor" data-value="#B56308" title=""
                                                                    aria-label="Mai Tai" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Mai Tai"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#BD9400"
                                                                    data-event="foreColor" data-value="#BD9400" title=""
                                                                    aria-label="Buddha Gold" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Buddha Gold"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#397B21"
                                                                    data-event="foreColor" data-value="#397B21" title=""
                                                                    aria-label="Forest Green" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Forest Green"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#104A5A"
                                                                    data-event="foreColor" data-value="#104A5A" title=""
                                                                    aria-label="Eden" data-toggle="button" tabindex="-1"
                                                                    data-original-title="Eden"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#085294"
                                                                    data-event="foreColor" data-value="#085294" title=""
                                                                    aria-label="Venice Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Venice Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#311873"
                                                                    data-event="foreColor" data-value="#311873" title=""
                                                                    aria-label="Meteorite" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Meteorite"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#731842"
                                                                    data-event="foreColor" data-value="#731842" title=""
                                                                    aria-label="Claret" data-toggle="button"
                                                                    tabindex="-1" data-original-title="Claret"></button>
                                                            </div>
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#630000"
                                                                    data-event="foreColor" data-value="#630000" title=""
                                                                    aria-label="Rosewood" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Rosewood"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#7B3900"
                                                                    data-event="foreColor" data-value="#7B3900" title=""
                                                                    aria-label="Cinnamon" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Cinnamon"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#846300"
                                                                    data-event="foreColor" data-value="#846300" title=""
                                                                    aria-label="Olive" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Olive"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#295218"
                                                                    data-event="foreColor" data-value="#295218" title=""
                                                                    aria-label="Parsley" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Parsley"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#083139"
                                                                    data-event="foreColor" data-value="#083139" title=""
                                                                    aria-label="Tiber" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Tiber"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#003163"
                                                                    data-event="foreColor" data-value="#003163" title=""
                                                                    aria-label="Midnight Blue" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Midnight Blue"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#21104A"
                                                                    data-event="foreColor" data-value="#21104A" title=""
                                                                    aria-label="Valentino" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="Valentino"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#4A1031"
                                                                    data-event="foreColor" data-value="#4A1031" title=""
                                                                    aria-label="Loulou" data-toggle="button"
                                                                    tabindex="-1" data-original-title="Loulou"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><button type="button"
                                                            class="note-color-select btn btn-light btn-default"
                                                            data-event="openPalette"
                                                            data-value="foreColorPicker-17271893007821">Select</button><input
                                                            type="color" id="foreColorPicker-17271893007821"
                                                            class="note-btn note-color-select-btn" value="#000000"
                                                            data-event="foreColorPalette-17271893007821"></div>
                                                    <div class="note-holder-custom" id="foreColorPalette-17271893007821"
                                                        data-event="foreColor">
                                                        <div class="note-color-palette">
                                                            <div class="note-color-row"><button type="button"
                                                                    class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button><button
                                                                    type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF"
                                                                    data-event="foreColor" data-value="#FFFFFF" title=""
                                                                    aria-label="#FFFFFF" data-toggle="button"
                                                                    tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-btn-group btn-group note-para"><button type="button"
                                            class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                            aria-label="Unordered list (CTRL+SHIFT+NUM7)"
                                            data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i
                                                class="note-icon-unorderedlist"></i></button><button type="button"
                                            class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                            aria-label="Ordered list (CTRL+SHIFT+NUM8)"
                                            data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i
                                                class="note-icon-orderedlist"></i></button>
                                        <div class="note-btn-group btn-group"><button type="button"
                                                class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1"
                                                data-toggle="dropdown" title="" aria-label="Paragraph"
                                                data-original-title="Paragraph"><i
                                                    class="note-icon-align-left"></i></button>
                                            <div class="note-dropdown-menu dropdown-menu" role="list">
                                                <div class="note-btn-group btn-group note-align"><button type="button"
                                                        class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                        aria-label="Align left (CTRL+SHIFT+L)"
                                                        data-original-title="Align left (CTRL+SHIFT+L)"><i
                                                            class="note-icon-align-left"></i></button><button
                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                        tabindex="-1" title="" aria-label="Align center (CTRL+SHIFT+E)"
                                                        data-original-title="Align center (CTRL+SHIFT+E)"><i
                                                            class="note-icon-align-center"></i></button><button
                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                        tabindex="-1" title="" aria-label="Align right (CTRL+SHIFT+R)"
                                                        data-original-title="Align right (CTRL+SHIFT+R)"><i
                                                            class="note-icon-align-right"></i></button><button
                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                        tabindex="-1" title="" aria-label="Justify full (CTRL+SHIFT+J)"
                                                        data-original-title="Justify full (CTRL+SHIFT+J)"><i
                                                            class="note-icon-align-justify"></i></button></div>
                                                <div class="note-btn-group btn-group note-list"><button type="button"
                                                        class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                        aria-label="Outdent (CTRL+[)"
                                                        data-original-title="Outdent (CTRL+[)"><i
                                                            class="note-icon-align-outdent"></i></button><button
                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                        tabindex="-1" title="" aria-label="Indent (CTRL+])"
                                                        data-original-title="Indent (CTRL+])"><i
                                                            class="note-icon-align-indent"></i></button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-btn-group btn-group note-table">
                                        <div class="note-btn-group btn-group"><button type="button"
                                                class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1"
                                                data-toggle="dropdown" title="" aria-label="Table"
                                                data-original-title="Table"><i class="note-icon-table"></i></button>
                                            <div class="note-dropdown-menu dropdown-menu note-table" role="list"
                                                aria-label="Table">
                                                <div class="note-dimension-picker">
                                                    <div class="note-dimension-picker-mousecatcher"
                                                        data-event="insertTable" data-value="1x1"
                                                        style="width: 10em; height: 10em;"></div>
                                                    <div class="note-dimension-picker-highlighted"></div>
                                                    <div class="note-dimension-picker-unhighlighted"></div>
                                                </div>
                                                <div class="note-dimension-display">1 x 1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-btn-group btn-group note-insert"><button type="button"
                                            class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                            aria-label="Link (CTRL+K)" data-original-title="Link (CTRL+K)"><i
                                                class="note-icon-link"></i></button><button type="button"
                                            class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                            aria-label="Picture" data-original-title="Picture"><i
                                                class="note-icon-picture"></i></button><button type="button"
                                            class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                            aria-label="Video" data-original-title="Video"><i
                                                class="note-icon-video"></i></button></div>
                                    <div class="note-btn-group btn-group note-view"><button type="button"
                                            class="note-btn btn btn-light btn-sm btn-fullscreen note-codeview-keep"
                                            tabindex="-1" title="" aria-label="Full Screen"
                                            data-original-title="Full Screen"><i
                                                class="note-icon-arrows-alt"></i></button><button type="button"
                                            class="note-btn btn btn-light btn-sm btn-codeview note-codeview-keep"
                                            tabindex="-1" title="" aria-label="Code View"
                                            data-original-title="Code View"><i
                                                class="note-icon-code"></i></button><button type="button"
                                            class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                            aria-label="Help" data-original-title="Help"><i
                                                class="note-icon-question"></i></button></div>
                                </div>
                                <div class="note-editing-area">
                                    <div class="note-handle">
                                        <div class="note-control-selection">
                                            <div class="note-control-selection-bg"></div>
                                            <div class="note-control-holder note-control-nw"></div>
                                            <div class="note-control-holder note-control-ne"></div>
                                            <div class="note-control-holder note-control-sw"></div>
                                            <div class="note-control-sizing note-control-se"></div>
                                            <div class="note-control-selection-info"></div>
                                        </div>
                                    </div><textarea class="note-codable" aria-multiline="true"></textarea>
                                    <div class="note-editable card-block" contenteditable="true" role="textbox"
                                        aria-multiline="true" spellcheck="true" autocorrect="true">
                                        <h1><u>Heading Of Message</u></h1>
                                        <h4>Subheading</h4>
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                            and praising pain
                                            was born and I will give you a complete account of the system, and expound
                                            the actual teachings
                                            of the great explorer of the truth, the master-builder of human happiness.
                                            No one rejects,
                                            dislikes, or avoids pleasure itself, because it is pleasure, but because
                                            those who do not know
                                            how to pursue pleasure rationally encounter consequences that are extremely
                                            painful. Nor again
                                            is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain,
                                            but because occasionally circumstances occur in which toil and pain can
                                            procure him some great
                                            pleasure. To take a trivial example, which of us ever undertakes laborious
                                            physical exercise,
                                            except to obtain some advantage from it? But who has any right to find fault
                                            with a man who
                                            chooses to enjoy a pleasure that has no annoying consequences, or one who
                                            avoids a pain that
                                            produces no resultant pleasure? On the other hand, we denounce with
                                            righteous indignation and
                                            dislike men who are so beguiled and demoralized by the charms of pleasure of
                                            the moment, so
                                            blinded by desire, that they cannot foresee</p>
                                        <ul>
                                            <li>List item one</li>
                                            <li>List item two</li>
                                            <li>List item three</li>
                                            <li>List item four</li>
                                        </ul>
                                        <p>Thank you,</p>
                                        <p>John Doe</p>
                                    </div>
                                </div><output class="note-status-output" role="status" aria-live="polite"></output>
                                <div class="note-statusbar" role="status">
                                    <div class="note-resizebar" aria-label="Resize">
                                        <div class="note-icon-bar"></div>
                                        <div class="note-icon-bar"></div>
                                        <div class="note-icon-bar"></div>
                                    </div>
                                </div>
                                <div class="modal note-modal link-dialog" aria-hidden="false" tabindex="-1"
                                    role="dialog" aria-label="Insert Link">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Insert Link</h4><button type="button"
                                                    class="close" data-dismiss="modal" aria-label="Close"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group note-form-group"><label
                                                        for="note-dialog-link-txt-17271893007821"
                                                        class="note-form-label">Text to display</label><input
                                                        id="note-dialog-link-txt-17271893007821"
                                                        class="note-link-text form-control note-form-control note-input"
                                                        type="text"></div>
                                                <div class="form-group note-form-group"><label
                                                        for="note-dialog-link-url-17271893007821"
                                                        class="note-form-label">To what URL should this link
                                                        go?</label><input id="note-dialog-link-url-17271893007821"
                                                        class="note-link-url form-control note-form-control note-input"
                                                        type="text" value="http://"></div>
                                                <div class="form-check sn-checkbox-open-in-new-window"><label
                                                        class="form-check-label"><input type="checkbox"
                                                            class="form-check-input" checked=""
                                                            aria-label="Open in new window" aria-checked="true"> Open in
                                                        new window</label></div>
                                                <div class="form-check sn-checkbox-use-protocol"><label
                                                        class="form-check-label"><input type="checkbox"
                                                            class="form-check-input" checked=""
                                                            aria-label="Use default protocol" aria-checked="true"> Use
                                                        default protocol</label></div>
                                            </div>
                                            <div class="modal-footer"><input type="button" href="#"
                                                    class="btn btn-primary note-btn note-btn-primary note-link-btn"
                                                    value="Insert Link" disabled=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-popover popover in note-link-popover bottom">
                                    <div class="arrow"></div>
                                    <div class="popover-content note-children-container"><span><a
                                                target="_blank"></a>&nbsp;</span>
                                        <div class="note-btn-group btn-group note-link"><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Edit" data-original-title="Edit"><i
                                                    class="note-icon-link"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Unlink" data-original-title="Unlink"><i
                                                    class="note-icon-chain-broken"></i></button></div>
                                    </div>
                                </div>
                                <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog"
                                    aria-label="Insert Image">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Insert Image</h4><button type="button"
                                                    class="close" data-dismiss="modal" aria-label="Close"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group note-form-group note-group-select-from-files">
                                                    <label for="note-dialog-image-file-17271893007821"
                                                        class="note-form-label">Select from files</label><input
                                                        id="note-dialog-image-file-17271893007821"
                                                        class="note-image-input form-control-file note-form-control note-input"
                                                        type="file" name="files" accept="image/*" multiple="multiple">
                                                </div>
                                                <div class="form-group note-group-image-url"><label
                                                        for="note-dialog-image-url-17271893007821"
                                                        class="note-form-label">Image URL</label><input
                                                        id="note-dialog-image-url-17271893007821"
                                                        class="note-image-url form-control note-form-control note-input"
                                                        type="text"></div>
                                            </div>
                                            <div class="modal-footer"><input type="button" href="#"
                                                    class="btn btn-primary note-btn note-btn-primary note-image-btn"
                                                    value="Insert Image" disabled=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-popover popover in note-image-popover bottom">
                                    <div class="arrow"></div>
                                    <div class="popover-content note-children-container">
                                        <div class="note-btn-group btn-group note-resize"><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Resize full" data-original-title="Resize full"><span
                                                    class="note-fontsize-10">100%</span></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Resize half" data-original-title="Resize half"><span
                                                    class="note-fontsize-10">50%</span></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Resize quarter" data-original-title="Resize quarter"><span
                                                    class="note-fontsize-10">25%</span></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Original size" data-original-title="Original size"><i
                                                    class="note-icon-rollback"></i></button></div>
                                        <div class="note-btn-group btn-group note-float"><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Float Left" data-original-title="Float Left"><i
                                                    class="note-icon-float-left"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Float Right" data-original-title="Float Right"><i
                                                    class="note-icon-float-right"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Remove float" data-original-title="Remove float"><i
                                                    class="note-icon-rollback"></i></button></div>
                                        <div class="note-btn-group btn-group note-remove"><button type="button"
                                                class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                aria-label="Remove Image" data-original-title="Remove Image"><i
                                                    class="note-icon-trash"></i></button></div>
                                    </div>
                                </div>
                                <div class="note-popover popover in note-table-popover bottom">
                                    <div class="arrow"></div>
                                    <div class="popover-content note-children-container">
                                        <div class="note-btn-group btn-group note-add"><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title=""
                                                aria-label="Add row below" data-original-title="Add row below"><i
                                                    class="note-icon-row-below"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title=""
                                                aria-label="Add row above" data-original-title="Add row above"><i
                                                    class="note-icon-row-above"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title=""
                                                aria-label="Add column left" data-original-title="Add column left"><i
                                                    class="note-icon-col-before"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title=""
                                                aria-label="Add column right" data-original-title="Add column right"><i
                                                    class="note-icon-col-after"></i></button></div>
                                        <div class="note-btn-group btn-group note-delete"><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title=""
                                                aria-label="Delete row" data-original-title="Delete row"><i
                                                    class="note-icon-row-remove"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title=""
                                                aria-label="Delete column" data-original-title="Delete column"><i
                                                    class="note-icon-col-remove"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title=""
                                                aria-label="Delete table" data-original-title="Delete table"><i
                                                    class="note-icon-trash"></i></button></div>
                                    </div>
                                </div>
                                <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog"
                                    aria-label="Insert Video">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Insert Video</h4><button type="button"
                                                    class="close" data-dismiss="modal" aria-label="Close"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group note-form-group row-fluid"><label
                                                        for="note-dialog-video-url-17271893007821"
                                                        class="note-form-label">Video URL <small
                                                            class="text-muted">(YouTube, Google Drive, Vimeo, Vine,
                                                            Instagram, DailyMotion, Youku,
                                                            Peertube)</small></label><input
                                                        id="note-dialog-video-url-17271893007821"
                                                        class="note-video-url form-control note-form-control note-input"
                                                        type="text"></div>
                                            </div>
                                            <div class="modal-footer"><input type="button" href="#"
                                                    class="btn btn-primary note-btn note-btn-primary note-video-btn"
                                                    value="Insert Video" disabled=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog"
                                    aria-label="Help">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Help</h4><button type="button" class="close"
                                                    data-dismiss="modal" aria-label="Close"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>ESC</kbd></label><span>Escape</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert
                                                    Paragraph</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undo
                                                    the last command</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redo
                                                    the last command</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set
                                                    a bold style</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set
                                                    a italic style</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set
                                                    a underline style</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set
                                                    a strikethrough style</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean
                                                    a style</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set
                                                    left align</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set
                                                    center align</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set
                                                    right align</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set
                                                    full align</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle
                                                    unordered list</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle
                                                    ordered list</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent
                                                    on current paragraph</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent
                                                    on current paragraph</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change
                                                    current block's format as a paragraph(P tag)</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change
                                                    current block's format as H1</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change
                                                    current block's format as H2</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change
                                                    current block's format as H3</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change
                                                    current block's format as H4</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change
                                                    current block's format as H5</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change
                                                    current block's format as H6</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert
                                                    horizontal rule</span>
                                                <div class="help-list-item"></div><label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show
                                                    Link Dialog</span>
                                            </div>
                                            <div class="modal-footer">
                                                <p class="text-center"><a href="http://summernote.org/" target="_blank"
                                                        rel="noopener noreferrer">Summernote 0.8.20</a> · <a
                                                        href="https://github.com/summernote/summernote" target="_blank"
                                                        rel="noopener noreferrer">Project</a> · <a
                                                        href="https://github.com/summernote/summernote/issues"
                                                        target="_blank" rel="noopener noreferrer">Issues</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="btn btn-default btn-file">
                                <i class="fas fa-paperclip"></i> Attachment
                                <input type="file" name="attachment">
                            </div>
                            <p class="help-block">Max. 32MB</p>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i>
                                Draft</button>
                            <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                        </div>
                        <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('customs/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('customs/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            // DataTable options
        });
    });
</script>
@endsection