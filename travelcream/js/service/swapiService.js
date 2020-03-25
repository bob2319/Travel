async function getUserAsync() 
{
  let response = await fetch(`http://testdump.raritet-2005.com.ua//wp-content/themes/travelcream/js/service/flights.json`);
  let data = await response.json()
  return data;
}

getUserAsync()
  .then(data => {
      console.log('data find');
      console.log(data)
    data.map(item => {
        const {company, segment, id, points  } = item;
        const {duration, departureTime, arrivalTime, origin, destination} = segment[0];
        let getDate = departureTime.split('T');
        let StartEnd = getDate[1].split('-')
        let column = $(`<tr class='flights-list_column-item'>
        <td>
        ${company} 
        <i>${id}</i>
        </td>
        <td>${getDate[0]}</td>
        <td>${origin}
            <i> ${StartEnd[0]}</i></td>
        <td>${destination}
            <i>${StartEnd[1]} </i></td>
        <td>${duration}
            <i>${origin} - ${destination}</i></td>
        <td><span>${points}</span></td>
        </tr>`)
        $('.flights-list tbody').append(column)
    });
  })
  .catch( err => console.log(err));