Laboratory Activity 3

Q1: Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

well, i place the /subjects/featured route before the `/subjects/{id}. kasi chinicheck ni laravel and routes from the top to buttom. if i swapped them, the laravel might treat the word featured as a ID, so the featured page might not work correctly



Q2: What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

when there are someone visist an ID that does not exist in the subject data, such as /subjects/999, lalabas ang 404 Not found page. I use isset($subjects[$id]) to check of may existing ID na ganon, then i use abort(404) if the subject was not found



Q3: Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

I use the route names for automatic na mag generate ang laravel ng tamang URL. Example, when the URL of the subject list is still working and the back link of it because of the route('subjects.index'). now when it is hardcoded URL, it is possble na masira ang link that may lead to 404 when the route change URL.


end.

