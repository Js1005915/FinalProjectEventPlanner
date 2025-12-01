<h1>Events: </h1>


<table>
    <tr>
        <th>Title</th>
        <th>Date</th>
        <th>Location</th>
        <th>More Info</th>
    </tr>
    <?php foreach ($events as $e): ?>
        <tr>
            <td><?= htmlspecialchars($e['title']) ?></td>
            <td><?= htmlspecialchars($e['event_date']) ?></td>
            <td><?= htmlspecialchars($e['location']) ?></td>
            <td> <a href="info">More Info</a></td>
        </tr>
    <?php endforeach ?>
</table>