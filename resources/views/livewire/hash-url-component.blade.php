<div>
    <div class="container">
        <h1>Generate HashURL</h1>
        <div class="card">
            <div class="card-header">
                <form wire:submit.prevent="generateHashUrl()">
                    <div class="input-group mb-3">
                        <input type="text" wire:model.lazy="original_url" class="form-control"
                            placeholder="Enter Original URL">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Generate Hash</button>
                    </div>
            </div>
            @error('original_url')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </form>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Hash URL</th>
                        <th>Original URL </th>
                    </tr>
                </thead>
                <tbody>

                        @foreach($hashUrls as $url)
                        <tr>
                            <td>{{ $loop->index+1  }}</td>
                            <td><a href="{{ route('hash.url', $url->hash_url) }}"
                                    target="_blank">{{ route('hash.url', $url->hash_url) }}</a></td>
                            <td>{{ $url->org_url }}</td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

