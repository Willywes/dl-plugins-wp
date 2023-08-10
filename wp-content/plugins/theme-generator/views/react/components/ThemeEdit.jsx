import React from 'react'
import {initialTheme} from "../constanst";
import {slugify} from "../utils";

const ThemeEdit = () => {


    const [theme, setTheme] = React.useState(initialTheme);

    // export const initialTheme = {
    //     name: 'My Theme',
    //     slug: 'my-theme',
    //     description: 'My Theme Description',
    //     Uri: 'https://devlasb.cl',
    //     author: 'My Name',
    //     authorUri: 'https://devlasb.cl',
    //     tags: ['blog', 'portfolio'],
    //     version: '1.0.0',
    //     customPostTypes: [],
    // }

    const handleTags = (e) => {
        let tags = e.target.value.split(',');
        tags = tags.map(tag => tag.trim());
        setTheme({...theme, tags: tags});
    }

    const handleTaxonomies = (e) => {
        let taxonomies = e.target.value.split(',');
        taxonomies = taxonomies.map(taxonomy => taxonomy.trim());
        setTheme({...theme, taxonomies: taxonomies});
    }

    const arrayToString = (array) => {
        let string = '';
        array.forEach((item, index) => {
            string += item;
            if (index < array.length - 1) {
                string += ', ';
            }
        });
        return string;
    }

    const storeTheme = () => {

        const formData = new FormData();
        formData.append('name', theme.name);
        formData.append('slug', theme.slug);
        formData.append('description', theme.description);
        formData.append('uri', theme.uri);
        formData.append('author', theme.author);
        formData.append('authorUri', theme.authorUri);
        theme.tags.forEach(tag => formData.append('tags[]', tag));
        theme.customPostTypes.forEach((customPostType, index) => {
            formData.append(`customPostTypes[${index}][singularName]`, customPostType.singularName);
            formData.append(`customPostTypes[${index}][pluralName]`, customPostType.pluralName);
        });


        fetch('/woocommerce/wp-admin/admin-ajax.php?action=tg_create_theme', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Error fetching data:', error));

    }


    return (
        <div className="card">
            <div className="card-body">
                <h5 className="card-title">Theme Settings</h5>
                <p className="card-text">Edit your theme settings here.</p>
                <div className="row">
                    <div className="col-md-3 mb-3">
                        <label htmlFor="name">Theme Name</label>
                        <input type="text" className="form-control" id="name" placeholder="Theme Name"
                               value={theme.name} onChange={(e) => setTheme({...theme, name: e.target.value})}
                               onKeyUp={(e) => setTheme({
                                   ...theme,
                                   slug: slugify(theme.name)
                               })}/>
                    </div>
                    <div className="col-md-3 mb-3">
                        <label htmlFor="slug">Theme Slug</label>
                        <input type="text" className="form-control" id="slug" placeholder="Theme Slug"
                               value={theme.slug} onChange={(e) => setTheme({...theme, slug: e.target.value})}/>
                    </div>
                    <div className="col-md-3 mb-3">
                        <label htmlFor="description">Theme Description</label>
                        <input type="text" className="form-control" id="description" placeholder="Theme Description"
                               value={theme.description}
                               onChange={(e) => setTheme({...theme, description: e.target.value})}/>
                    </div>
                    <div className="col-md-3 mb-3">
                        <label htmlFor="uri">Theme URI</label>
                        <input type="text" className="form-control" id="uri" placeholder="Theme URI" value={theme.uri}
                               onChange={(e) => setTheme({...theme, uri: e.target.value})}/>
                    </div>
                    <div className="col-md-3 mb-3">
                        <label htmlFor="author">Author</label>
                        <input type="text" className="form-control" id="author" placeholder="Author"
                               value={theme.author} onChange={(e) => setTheme({...theme, author: e.target.value})}/>
                    </div>
                    <div className="col-md-3 mb-3">
                        <label htmlFor="authorUri">Author URI</label>
                        <input type="text" className="form-control" id="authorUri" placeholder="Author URI"
                               value={theme.authorUri}
                               onChange={(e) => setTheme({...theme, authorUri: e.target.value})}/>
                    </div>
                    <div className="col-md-3 mb-3">
                        <label htmlFor="tags">Tags</label>
                        <input type="text" className="form-control" id="tags" placeholder="Tags"
                               value={arrayToString(theme.tags)} onChange={handleTags}/>
                    </div>

                    <div className="col-md-3 mb-3">
                        <label htmlFor="version">Version</label>
                        <input type="text" className="form-control" id="version" placeholder="Version"
                               value={theme.version} onChange={(e) => setTheme({...theme, version: e.target.value})}/>
                    </div>
                    <div className="col-md-3 mb-3">
                        <button className="btn btn-primary" onClick={storeTheme}>
                            <i className="fas fa-save"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default ThemeEdit;
