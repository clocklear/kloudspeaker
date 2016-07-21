Docker Kloudspeaker
===
Kloudspeaker is web document management and sharing platform.

For features, requirements, screenshots, downloads etc, visit project web page is at [http://www.kloudspeaker.com](http://www.kloudspeaker.com).

Open installer at address [http://your_host:port/backend/install](http://your_host:port/backend/install).

The installer will guide you through configuration.

You should mount the `/data` volume on your computer. The configuration sqllite DB will be placed here.

The ideas herein borrow heavily from the [evanhoucke/kloudspeaker](https://hub.docker.com/r/evanhoucke/kloudspeaker/) container.  I injected that ability to view/edit PMML files into the configuration and set the default PHP