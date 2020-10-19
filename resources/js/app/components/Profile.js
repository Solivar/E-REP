import { update } from 'lodash';
import React, { useState, useEffect } from 'react';

import { API_URL } from '../Consts';

import Details from './details/Details';
import DetailsForm from './details/DetailsForm';

import Image from './image/Image';
import ImageModal from './image/ImageModal';
import VoteForm from './vote/VoteForm';
import VoteList from './vote/VoteList';

function Profile() {
    const id = 1;
    const [details, setDetails] = useState({});

    useEffect(() => {
        async function fetchData() {
            const res = await axios(`${API_URL}/users/${id}`);
            console.log(res.data);
            setDetails(res.data);
        }
        fetchData();
    }, []);

    const onImageDelete = () => {
        const newDetails = { ...details };
        newDetails.image_path = null;

        setDetails(newDetails);
    }

    const onImageUpload = (image_path) => {
        const newDetails = { ...details, image_path };

        setDetails(newDetails);
    }

    const onDetailsUpdate = (updatedDetails) => {
        const newDetails = { ...details, ...updatedDetails };

        setDetails(newDetails);
    }

    return (
        <div className="container">
            <div className="row">
                <div className="col-12 col-md-3">
                    <div className="row row-cols-1">
                        <div className="col">
                            <Image image_path={details.image_path}>
                                <ImageModal
                                    image_path={details.image_path}
                                    onImageUpload={onImageUpload}
                                    onImageDelete={onImageDelete}
                                />
                            </Image>
                        </div>
                        <div className="col">
                            <Details {...details}>
                                <DetailsForm onDetailsUpdate={onDetailsUpdate}/>
                            </Details>
                        </div>
                    </div>
                </div>
                <div className="col-12 col-md-9">
                    <h4>Vote</h4>
                    <VoteForm />
                    <hr/>
                    <h4>Recent votes</h4>
                    <VoteList />
                </div>
            </div>
        </div>
    );
}

export default Profile;
