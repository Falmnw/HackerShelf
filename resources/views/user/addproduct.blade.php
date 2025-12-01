    @extends('layout.master')
    @section('title', 'add product')

    @section('content')

    <div class="col-md-6 offset-md-3 mt-5">
        <h1>Add New Product</h1>

        <form action="{{ route('create-product') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="InputName">Tool Name</label>
                <input type="text" name="name" class="form-control" id="InputName" placeholder="Enter product name" required>
            </div>

            <div class="form-group mb-3">
                <label for="InputVersion">Version</label>
                <input type="text" name="version" class="form-control" id="InputVersion" placeholder="Enter Version" required>
            </div>

            <div class="form-group mb-3">
                <label for="inputToolCategory">Tool Category</label>
                <select class="form-control" id="inputToolCategory" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="InputDescription">Description</label>
                <input type="text" name="description" class="form-control" id="InputDescription" placeholder="Enter product description" required>
            </div>

            <div class="form-group mb-3">
                <label for="InputInstallationSteps">Installation Steps</label>
                <input type="text" name="installation_steps" class="form-control" id="InputInstallationSteps" placeholder="Enter installation steps" required>
            </div>

            <div class="form-group mb-3">
                <label for="InputDocument">Documents / File</label>
                <input type="file" name="tool_document" class="form-control" id="InputDocument" required>
            </div>

            <div class="form-group mb-3">
                <label class="mr-2">Banner Design</label>
                <input type="file" name="picture" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

    @endsection
