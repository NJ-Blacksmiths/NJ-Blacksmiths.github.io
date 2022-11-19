---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

title: New Jersey Blacksmiths Association
layout: home
---

Welcome to the web site of the New Jersey Blacksmiths Association, a non-profit organization dedicated to the promotion of the art and craft of blacksmithing.

# Announcements
Talk with us on [Reddit](https://reddit.com/r/njba)

Join our [Facebook group](https://www.facebook.com/groups/482585095929871/)

Follow our [Facebook page](https://www.facebook.com/njblacksmiths/)

---

# Upcoming NJBA events

<table>

  <tr>
  <td>What</td>
  <td>When</td>
  <td>Description</td>
  </tr>

  {% for event in site.data.events.njba_events %}

    <td> <b> {{ event.name }} </b></td>
    <td> {{ event.time }}</td>
    <td> {{ event.description }}</td>
    </tr>

  {% endfor %}
</table>

# Upcoming non-NJBA events

<table>

  <tr>
  <td>What</td>
  <td>When</td>
  <td>Description</td>
  </tr>

  {% for event in site.data.events.non_njba_events %}

    <td> <b> {{ event.name }} </b></td>
    <td> {{ event.time }}</td>
    <td> {{ event.description }}</td>
    </tr>

  {% endfor %}
</table>


...