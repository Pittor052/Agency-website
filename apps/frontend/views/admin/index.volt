{% if flashSession.output()%}
<div class="errorMessage">
    {{flashSession.output()}}
</div>
{% endif %}
<div class="successMessage" style="margin-left: 2%;"><h1>HELLO, ADMIN!</h1></div>
<!--Form for upload-->
<div class="row">
    <div class="col-md-4 col-sm-6" style="margin-left: 2%;">
        <form action="admin/upload" method="POST" enctype="multipart/form-data">

            <!--             Menu for selecting category-->


        </form>
    </div>
</div>

<div class="col-sm-6" style="margin-left: 1%;">
    <br/><br/><br/>

    <form role="form" action="products/create" method="POST" enctype="multipart/form-data">
        <p style="color: #ffffff">
            FILE:
            <input type="file" name="anotherImage">
        </p>
        <label for="category">Select the category of your image:</label><br>
        <select name="category">
            <option value="1">Koвчези</option>
            <option value="2">Некролози</option>
            <option value="3">Паметници</option>
            <option value="4">Гравири</option>
            <option value="5">Други</option>
        </select>

        <div class="form-group" style="color: #ffffff">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Of Product">
        </div>
        <div class="form-group" style="color: #ffffff">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description"
                   placeholder="Description Of Product">
        </div>
        <div class="form-group" style="color: #ffffff">
            <label for="price">price</label>
            <input type="text" name="price" class="form-control" id="price"
                   placeholder="Type in the price">
        </div>
        <button type="submit" class="btn btn-default">submit</button>
    </form>
</div>