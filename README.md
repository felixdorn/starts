TODO:

* [ ] Calendar Year, month, day, birthday, time input
* [ ] Image upload field (see spatie/laravel-medialibrary something)
* [ ] File input
* [ ] Charts
* [ ] Tab Switch [Tab1|Tab2] [icon1|icon2]
* [ ] Smart search (all in one)
* [ ] Provide french translations 
 * [ ] Algolia search places [2.x]
 * Make it easy to add any command in the setup, override them : should go along with the laravel improved commands with directories matching our structure.
 * Email verification when updated (listener)
 
To finish:

* \<x-breadcrumb>
* \<x-avatars-stack>
* \<x-markdown-editor>
* \<x-stats>
* \<x-tabs>
* \<x-video> (see https://github.com/BenSampo/laravel-embed)
### Requirements

* PHP7.4

### Architecture

The boilerplate comes with a more flattened architecture, mostly in the `app/` directory.

### Naming convention

**Singular > Plural**

`ArticlesController` -> `ArticleController`
`EncryptCookies` -> `EncryptCookies`
> Sometimes, plural makes sense and it's okay to use it.

Models, controllers, directories, routes names should 99% of the time be singular.
And of the rest, it comes down to your intuition.

#### Guarded Models

All the models are unguarded by default, guarding models only makes sense if you use `$request->all()` and you should almost never do that.

### Reference

#### Inputs

* <x-checkbox />
* <x-input />
* <x-markdown-editor />
* <x-password />
* <x-quantity />
* <x-rating />
* <x-select />
* <x-toggle />
* <x-toggleable-icon />
* <x-value />
