//Fetch data from API 
const gitAPI = fetch('https://api.github.com/users/andrew');
gitAPI
    .then((res)=>res.json())
    .then((profile)=>console.log(profile))
    .catch((err)=>console.log(err));

//console.log(gitAPI);