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
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('chat.compose') }}" class="btn btn-primary btn-block mb-3">Send Message</a>
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
                                <span class="badge bg-primary float-right">{{ $messages->count() }}</span>
                            </a>
                        </li>
                        {{-- @foreach ($messages as $message)
                        <li class="nav-item">
                            <a href="{{ route('chat.fetch-messages', ['id' => $message->id]) }}" class="nav-link">
                                <i class="far fa-envelope"></i> {{ $message->subject }}
                                <span class="float-right">{{ $message->sender }}</span>
                            </a>
                        </li>
                        @endforeach --}}
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
        </div>

        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Inbox</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Mail">
                            <div class="input-group-append">
                                <div class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="mailbox-controls">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                class="far fa-square"></i></button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i
                                    class="far fa-trash-alt"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                        </div>
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                        <div class="float-right">
                            {{ $messages->count() }} Messages
                        </div>
                    </div>

                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                                @foreach($messages as $message)
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check{{ $message->id }}">
                                            <label for="check{{ $message->id }}"></label>
                                        </div>
                                    </td>
                                    <td class="mailbox-name">
                                        <a href="{{ route('chat.fetch-messages', ['id' => $message->id]) }}">
                                            <b>{{ $message->sender }}</b>
                                        </a>
                                    </td>
                                    <td class="mailbox-subject">
                                        {{-- <a href="{{ route('chat.fetch-messages', ['id' => $message->id]) }}"> --}}
                                            {{ Str::limit($message->message, 50, '...') }}
                                            <!-- Singkatkan isi pesan di sini -->
                                        </a>
                                    </td>
                                    <td class="mailbox-attachment">
                                        @if ($message->attachments && $message->attachments->isNotEmpty())
                                        <i class="fas fa-paperclip"></i>
                                        @endif
                                    </td>
                                    <td class="mailbox-date">{{ $message->created_at->format('d M Y H:i') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>

                <div class="card-footer p-0">
                    <div class="mailbox-controls">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                class="far fa-square"></i></button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm"><i
                                    class="far fa-trash-alt"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                        </div>
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                        <div class="float-right">
                            {{ $messages->count() }} Messages
                        </div>
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