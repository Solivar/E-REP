import React, { useRef } from 'react';

import { API_URL } from '../../Consts';

function ImageModal({ image_path }) {
    const inputEl = useRef(null);

    function onUploadClick() {
        inputEl.current.click();
    }

    async function onImageDelete() {
        await axios.delete(`${API_URL}/users/1/image`);
    }

    async function onFileSelect(e) {
        const file = e.target.files[0];
        const data = new FormData()
        data.append('image', file);

        await axios.post(`${API_URL}/users/1/image`, data);
    }

    return (
        <div id="image-modal" className="modal" tabIndex="-1" role="dialog">
            <div className="modal-dialog" role="document">
                <div className="modal-content">
                <div className="modal-header">
                    <h5 className="modal-title">Profile image</h5>
                    <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div className="modal-body">
                    {image_path ?
                        <div className="text-center">
                            <img src={image_path} className="img-fluid" alt="User image"/>
                        </div>
                        :
                        <p>You do not have a profile image yet</p>
                    }

                    <form className="d-none">
                        <input type="file" className="form-control-file" ref={inputEl} onChange={onFileSelect}/>
                    </form>
                </div>
                <div className="modal-footer">
                    <button type="button" className="btn btn-primary" onClick={onUploadClick}>Upload</button>
                    <button type="button" className="btn btn-secondary" onClick={onImageDelete}>Delete</button>
                    <button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    );
}

export default ImageModal;
