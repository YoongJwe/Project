<script>
    let data1 = '[{"name" : "Harry","age": 32.12}]';
    let data2 = `[
        {
            "name" : "Harry",
            "age": "32"
        }
    ]`;
    let JSONdata1 = JSON.parse(data1);
    let JSONdata2 = JSON.parse(data2);
    console.log(JSONdata1);
    console.log(JSONdata2);
</script>