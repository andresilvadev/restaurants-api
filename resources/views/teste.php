<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form id="form">
    <input type="text" name="name" value="Erik's bar">
    <input type="text" name="description" value="Melhor Wiski da região">
    <input type="file" name="photo" id="file">
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    $('#file').on('change', function () {

        let formData = new FormData();
        formData.append('name', 'Erik\'s bar');
        formData.append('description', 'Melhor Wiski da região');
        formData.append('photo', $('#file')[0].files[0]);
        let headers = {
            'Authorization': 'Bearer Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBiZGQwNzQ2ODZmMzRlODFkYjEzYjdjMjQyYmEzYzc5ZDRhZjYxYjc4MjY2ZDUyMTNjOTMzNjVlM2VjNjg5NGYzYWVlMDJiMWJhNTA1NTZjIn0.eyJhdWQiOiIzIiwianRpIjoiMGJkZDA3NDY4NmYzNGU4MWRiMTNiN2MyNDJiYTNjNzlkNGFmNjFiNzgyNjZkNTIxM2M5MzM2NWUzZWM2ODk0ZjNhZWUwMmIxYmE1MDU1NmMiLCJpYXQiOjE1MDM0MDY3OTUsIm5iZiI6MTUwMzQwNjc5NSwiZXhwIjoxNTM0OTQyNzk0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.nF4AUcBWMM23kxjDT4jKbHJZFsu0-c0DI9-ChJayh3I0l8HWmngZXAMNcAcpU7X9P1dpCx3vYjaAnb0v4FOHgdPpSXnf3xZ7idXZ27EHSfMtqLFAsP6fA5OGLevZ1k1JqwIuCe9pc9BVsjqHNXm3farbOXnWbf4sY24h5vaRdsoRrCweqDBqW7eySg9W_MoPiaLap_NK_0BEZB-zGVHawFXky5phONq4BdoGvTxCtwE3wxLf6hh_cXz07oUTF4eZLmB-pkyUfAOXM7sFxcuhouvq3cYlmR6JJbVtiv-kzhT5St_RcFaiX_NW8qC6ShGZS44qBkl_erI6sHNGCBKKR62-2HTWU6lYNvhDefcTjFUHD8u0DWLTWtZLGQeO1HyN6UWc1Nj1aX3jEfKj7tsHrY7C29pX5xq6UGjhyAIBw0zVZAeJ_HkdfDljPjOh3IgWIc91VfyEh2ZOkZgv3X7MGF7_j1qt1_Tsh1jujyKUkxTqgc14oR1gpAcmc7SNBw-jm_QKuisebskbelQpPjUth-bMTdeIm-pcByIpH_-K3gn7vWXKo7mYhgsciE83CS-6rGjzCn7btAbtN3V-RrSg6hoEh5MccU866mXl9MHhxWys4r92eruINRfXkvEqMZl8wlrgGdBGTLWEQcS0lRKrhryUEI7O0gxDBrE6l8BEKSw"',
            //'content-type': 'multipart/form-data'
            'content-type': 'application/x-www-form-urlencoded'
        }
        axios.post('http://localhost:8000/api/v1/restaurants/2', formData, {headers: headers})
    })
</script>
</body>
</html>