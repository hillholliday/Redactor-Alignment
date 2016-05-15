# Redactor Alignment plugin for Craft

Adds Redactor’s “Alignment” [plugin](https://imperavi.com/redactor/plugins/alignment/) to Rich Text fields in Craft, which lets you add alignment to text.

## Installation

To install Redactor Alignment, copy the redactoralignment/ folder into craft/plugins/, and then go to Settings → Plugins and click the “Install” button next to “Redactor Alignment”.

Once installed, open your craft/config/redactor/ folder, and add the `alignment` plugin in whichever Redactor configs you want it to be enabled in:

```javascript
"plugins": ["alignment" /* , ... */ ]
```

## Changelog

### 1.0

* Initial release
