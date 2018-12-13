@extends('layouts.app')
@section('title') Login @endsection

@push('styles')
@endpush

@section('content')

    <div id="searchDomainParent" class="form-group m-form__group">
        <form class="form-horizontal" role="form" name="get_domain_info">
            <div class="form-body">
                <div class="form-group">
                    <div class="col-md-9">
                        <input name="domain_name" type="text" class="form-control" placeholder="Write Domain Name">
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <?php
    if (!empty($result['results']) && is_array($result['results'])) { ?>

    <div id="domainSuggestionsParent">
        <?php foreach ($result['results'] as $domain_info) { ?>
        <div>

            <table class="domainSuggestions">
                <?php foreach ($domain_info as $key => $value) { ?>
                <tr class="currentSuggestions">
                    <th> <?php echo $key ?> </th>
                    <td> <?php echo $value ?> </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <?php } ?>
    </div>

    <?php } ?>

    <style>

        #searchDomainParent {
            display: flex;
            justify-content: center;
        }

        #domainSuggestionsParent {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }

        #domainSuggestionsParent > div {
            display: flex;
            justify-content: center;
            width: 22%;
            margin: 20px 0;
        }

        .domainSuggestions {
            width: 80%;
            margin: auto;
        }

        table, tr, th {
            border: 1px solid black;
        }

    </style>


@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script src="{{ asset('js/dashboard/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/scripts.bundle.js') }}" type="text/javascript"></script>
{{--<script src="{{ asset('js/dashboard/fullcalendar.bundle.js') }}" type="text/javascript"></script>--}}
<script src="{{ asset('js/theme/morris-charts.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard/dashboard.js') }}" type="text/javascript"></script>
@endpush
