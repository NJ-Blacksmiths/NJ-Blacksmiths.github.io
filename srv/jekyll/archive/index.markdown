---
title: Newsletter Archive
layout: page
---

<!-- compute newest -->
{% assign newsletter_files = site.static_files | where: "newsletter", true %}
{% for volume in (1..50) %}
	{% assign any_issue = false %}
	{% for issue in (1..4) %}
		{% capture newsletter_file %}njba_{{ volume }}_{{ issue }}{% endcapture %}
		{% for newsletter_file_other in newsletter_files %}
			{% if newsletter_file_other.basename == newsletter_file %}	
				{% assign any_issue = true %}
				{% assign newest_volume = volume %}
				{% assign newest_issue = issue %}
				{% assign newest_link = newsletter_file_other.path %}
				{% break %}
			{% endif %}
		{% endfor %}
	{% endfor %}
	{% unless any_issue %}
		{% break %}
	{% endunless %}
{% endfor %}






# Newsletter Archive

## Larry Brown, Editor
This site is to provide members and other newsletter editors with a slightly stripped down 
version of the NJBA Newsletter. It contains all the text and graphics that is in the newsletter.
To recieve a newsletter please see "Membership" below.

Most recent newsletter: [Volume {{newest_volume}}, Issue {{newest_issue}}]({{newest_link}})


<table>
<thead>
<th>Volume</th>
<th>Issue 1</th>
<th>Issue 2</th>
<th>Issue 3</th>
<th>Issue 4</th>
</thead>

{% for volume in (1..50) %}
	{% assign any_issue = false %}
	{% for issue in (1..4) %}
		{% capture newsletter_file %}njba_{{ volume }}_{{ issue }}{% endcapture %}
		{% for newsletter_file_other in newsletter_files %}
			{% if newsletter_file_other.basename == newsletter_file %}	
				{% assign any_issue = true %}
				{% break %}
			{% endif %}
		{% endfor %}
	{% endfor %}
	{% unless any_issue %}
		{% break %}
	{% endunless %}
	<tr>
	<td>Volume {{volume}}</td>
	{% for issue in (1..4) %}
		{% capture newsletter_file %}njba_{{ volume }}_{{ issue }}{% endcapture %}
		<td>
		{% for newsletter_file_other in newsletter_files %}
			{% if newsletter_file_other.basename == newsletter_file %}
				<a href="{{newsletter_file_other.path}}">link</a>
				{% break %}
			{% endif %}
		{% endfor %}
		</td>
	{% endfor %}
	</tr>

{% endfor %}
</table>
